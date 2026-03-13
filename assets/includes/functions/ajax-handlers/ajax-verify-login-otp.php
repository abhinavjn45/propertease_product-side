<?php
// ajax-verify-login-otp.php - Finalizes login by verifying OTP and starting session
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();
ob_start();
header('Content-Type: application/json');

function send_json_response($data) {
    if (ob_get_length()) ob_clean();
    echo json_encode($data);
    exit;
}

try {
    require_once __DIR__ . '/../../config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-user-registration.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    $email = isset($_POST['email']) ? strtolower(trim($_POST['email'])) : '';
    $otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';

    if (empty($email) || empty($otp)) {
        send_json_response(['success' => false, 'error' => 'All verification details are required.']);
    }

    // 1. Verify OTP using the standard registration logic (BCRYPT + Expiry)
    $verifyResult = verify_user_otp($email, $otp);

    if ($verifyResult['success']) {
        // 2. Fetch User Unique ID to manage authentication
        global $con;
        $stmt = $con->prepare("SELECT user_unique_id, user_email FROM users WHERE user_email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        $stmt->close();

        if ($res->num_rows > 0) {
            $user = $res->fetch_assoc();
            
            // 3. Set Session
            $_SESSION['user_unique_id'] = $user['user_unique_id'];
            $_SESSION['user_email'] = $user['user_email'];

            // Clear OTP after use
            $con->query("UPDATE users SET user_otp_code = NULL, user_otp_expiry = NULL WHERE user_email = '$email'");

            send_json_response([
                'success' => true, 
                'message' => 'Login successful! Redirecting to your dashboard...',
                'redirect' => get_site_option('site_url') . 'dashboard/' // Adjust if necessary
            ]);
        } else {
            send_json_response(['success' => false, 'error' => 'Sync error: User profile not found.']);
        }
    } else {
        send_json_response(['success' => false, 'error' => $verifyResult['error']]);
    }

} catch (Throwable $e) {
    error_log("Login Verify Error: " . $e->getMessage());
    send_json_response(['success' => false, 'error' => 'Security check failed. Please try logging in again.']);
}

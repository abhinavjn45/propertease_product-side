<?php
// ajax-verify-otp.php - Root fix for JSON corruption
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
    // Load dependencies correctly
    require_once __DIR__ . '/../../config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-user-registration.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    $email = isset($_POST['email']) ? strtolower(trim($_POST['email'])) : '';
    $otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';

    if (empty($email) || empty($otp)) {
        send_json_response(['success' => false, 'error' => 'Both email and verification code are required.']);
    }

    // 1. Verify OTP (Handles BCRYPT check and 10-minute expiry)
    $verifyResult = verify_user_otp($email, $otp);

    if ($verifyResult['success']) {
        // 2. Activate User
        if (activate_user($email)) {
             send_json_response(['success' => true, 'message' => 'Your account has been successfully verified and activated!']);
        } else {
             send_json_response(['success' => false, 'error' => 'Verification successful, but failed to activate account.']);
        }
    } else {
         send_json_response(['success' => false, 'error' => $verifyResult['error']]);
    }

} catch (Throwable $e) {
    error_log("Verify Error: " . $e->getMessage());
    send_json_response(['success' => false, 'error' => 'A critical server error occurred during verification.']);
}
?>

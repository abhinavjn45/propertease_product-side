<?php
session_start();
require_once('../../../config/config.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

if (!isset($_SESSION['user_unique_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
    exit;
}

$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';

if (empty($email) || empty($otp)) {
    echo json_encode(['status' => 'error', 'message' => 'Email and OTP are required.']);
    exit;
}

if (!isset($_SESSION['society_reg_otp'])) {
    echo json_encode(['status' => 'error', 'message' => 'OTP session expired or not found.']);
    exit;
}

$session_data = $_SESSION['society_reg_otp'];

if ($session_data['email'] !== $email) {
    echo json_encode(['status' => 'error', 'message' => 'Email mismatch.']);
    exit;
}

if (time() > $session_data['expires']) {
    unset($_SESSION['society_reg_otp']);
    echo json_encode(['status' => 'error', 'message' => 'OTP expired.']);
    exit;
}

if ($session_data['otp'] === $otp) {
    echo json_encode(['status' => 'success', 'message' => 'Email verified successfully.']);
    // We don't unset here yet, let the final registration check this if needed, 
    // but the frontend already has its verified flag.
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid OTP.']);
}
exit;
?>

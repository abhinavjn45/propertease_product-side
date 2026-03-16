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

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    exit;
}

// Generate a 6-digit OTP
$otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

// Store OTP in session
$_SESSION['society_reg_otp'] = [
    'email' => $email,
    'otp' => $otp,
    'expires' => time() + 600 // 10 minutes expiry
];

/**
 * Placeholder for sending email. 
 * User said: "template and content we'll decide later"
 * For now, we'll simulate success and log the OTP locally for testing.
 */
// In a real scenario, use wp_mail or PHPMailer here.
// For testing purposes, we log it to a temp file or just assume success.

echo json_encode([
    'status' => 'success', 
    'message' => 'OTP sent to ' . $email,
    'debug_otp' => $otp // REMOVE THIS IN PRODUCTION
]);
exit;
?>

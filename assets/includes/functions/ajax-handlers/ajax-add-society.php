<?php
/**
 * AJAX Handler for adding a new society
 */

// Include necessary functions
require_once('../../config/config.php');
require_once('../database_functions/db-society-management.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Final check for registration function existence
    if (!function_exists('register_society')) {
        echo json_encode(['status' => 'error', 'message' => 'Registration service unavailable.']);
        exit;
    }

    if (!isset($_SESSION['user_unique_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
        exit;
    }

    // Final OTP Verification check (Security reinforcement)
    if (!isset($_POST['emailVerified']) || $_POST['emailVerified'] !== '1') {
        echo json_encode(['status' => 'error', 'message' => 'Email verification is mandatory.']);
        exit;
    }

    // Add auditor info from session
    $_POST['added_by'] = $_SESSION['user_unique_id'];

    // Call registration function with both form data and uploaded files
    $result = register_society($_POST, $_FILES);
    
    // Clear the OTP session upon success
    if ($result['status'] === 'success') {
        unset($_SESSION['society_reg_otp']);
    }

    echo json_encode($result);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>

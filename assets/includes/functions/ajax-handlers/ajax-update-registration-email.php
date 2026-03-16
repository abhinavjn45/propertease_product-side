<?php
// ajax-update-registration-email.php
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
    require_once __DIR__ . '/../database_functions/db-user-registration.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    $old_email = isset($_POST['old_email']) ? trim($_POST['old_email']) : '';
    $new_email = isset($_POST['new_email']) ? trim($_POST['new_email']) : '';

    if (empty($old_email) || empty($new_email)) {
        send_json_response(['success' => false, 'error' => 'Emails are required']);
    }

    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        send_json_response(['success' => false, 'error' => 'Invalid new email address']);
    }

    $formatted_new_email = strtolower($new_email);
    
    // Update email in DB
    $result = update_pending_user_email($old_email, $formatted_new_email);
    send_json_response($result);

} catch (Throwable $e) {
    error_log("Email Update Error: " . $e->getMessage());
    send_json_response(['success' => false, 'error' => 'A server error occurred.']);
}
?>

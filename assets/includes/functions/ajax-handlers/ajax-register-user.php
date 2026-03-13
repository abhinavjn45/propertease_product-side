<?php
// ajax-register-user.php
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
    // Load DB config and helpers
    require_once __DIR__ . '/../../config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-user-registration.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
    $designation = isset($_POST['designation']) ? trim($_POST['designation']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    // Basic Validation
    if (empty($name) || empty($email) || empty($phone) || empty($designation) || empty($password)) {
        send_json_response(['success' => false, 'error' => 'All fields are required']);
    }

    if ($password !== $confirm_password) {
        send_json_response(['success' => false, 'error' => 'Passwords do not match']);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        send_json_response(['success' => false, 'error' => 'Invalid email address']);
    }

    // Formatting as requested
    $formatted_name = ucwords(strtolower($name));
    $formatted_email = strtolower($email);
    $formatted_phone = preg_replace('/[^0-9]/', '', $phone); // 10 digit numbers only

    if (strlen($formatted_phone) < 10) {
        send_json_response(['success' => false, 'error' => 'Please enter a valid 10-digit phone number']);
    }

    // BCRYPT hashing
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $result = register_new_user($formatted_name, $formatted_email, $formatted_phone, $designation, $hashed_password);
    send_json_response($result);

} catch (Throwable $e) {
    error_log("Registration Error: " . $e->getMessage());
    send_json_response(['success' => false, 'error' => 'A critical server error occurred during registration.']);
}
?>

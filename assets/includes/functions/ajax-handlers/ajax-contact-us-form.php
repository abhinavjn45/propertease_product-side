<?php
    session_start();
    ob_start();
    header('Content-Type: application/json');
    error_reporting(E_ALL);
    ini_set('display_errors', '0');

    // Load DB config and helpers
    require_once __DIR__ . '/../../config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-contact-us-form.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        ob_clean();
        echo json_encode(['success' => false, 'error' => 'Invalid request method']);
        exit;
    }

    // Verify CSRF token
    $csrf_token = $_POST['csrf_token'] ?? null;
    if (!verify_csrf_token($csrf_token)) {
        ob_clean();
        echo json_encode(['success' => false, 'error' => 'Invalid security token. Please refresh and try again.']);
        exit;
    }

    // Format inputs as requested
    $name = ucwords(strtolower(isset($_POST['name']) ? trim($_POST['name']) : ''));
    $email = strtolower(isset($_POST['email']) ? trim($_POST['email']) : '');
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($email) || empty($name) || empty($message)) {
        ob_clean();
        echo json_encode(['success' => false, 'error' => 'All fields are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ob_clean();
        echo json_encode(['success' => false, 'error' => 'Please enter a valid email address.']);
        exit;
    }
    
    try {
        $result = add_new_contact_query($name, $email, $message);
        ob_clean();
        if ($result === true) {
            echo json_encode(['success' => true]);
        } elseif ($result === 'exists') {
            echo json_encode(['success' => false, 'error' => 'A request for this email has already been raised and is under process.']);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to process your message. Please try again later.']);
        }
    } catch (Throwable $e) {
        ob_clean();
        echo json_encode(['success' => false, 'error' => 'Server error occurred.']);
    }
?>
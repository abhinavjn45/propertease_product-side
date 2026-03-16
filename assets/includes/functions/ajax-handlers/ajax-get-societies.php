<?php
/**
 * ajax-get-societies.php - AJAX handler to fetch societies for the logged-in user
 */

// Include necessary functions
require_once('../../config/config.php');
require_once('../database_functions/db-society-management.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if user is logged in
    if (!isset($_SESSION['user_unique_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
        exit;
    }

    $user_id = $_SESSION['user_unique_id'];
    
    try {
        $societies = get_societies_by_user_id($user_id);
        
        // Return success response with data
        echo json_encode([
            'status' => 'success',
            'data' => $societies
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'An error occurred while fetching societies.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}
?>

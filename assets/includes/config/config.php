<?php 
    require_once __DIR__ . '/../functions/utility/utility_functions.php';
    ensure_session_started();

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'propertease_new');

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$con) {
        // Root fix: Check if we are in an AJAX context before redirecting
        if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'error' => 'Database connection failed. Please try again later.']);
            exit();
        }
        
        header("Location: http://localhost/propertease-new/product-side/error/500/");
        exit();
    }

    require_once __DIR__ . '/../functions/utility/details_fetcher.php';

    // Set the default timezone
    date_default_timezone_set(get_site_option('timezone') ?: 'UTC');
?>
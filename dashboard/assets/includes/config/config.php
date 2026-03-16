<?php 
    require_once __DIR__ . '/../functions/utility/utility_functions.php';
    ensure_session_started();

    // Detect environment from host to switch DB credentials automatically
    $currentHost = $_SERVER['HTTP_HOST'] ?? '';
    $isProduction = stripos($currentHost, 'propertease.abhinavjain.site') !== false;

    if ($isProduction) {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'u955229223_propertease');
        define('DB_PASS', 'Abhinav@Developer2024');
        define('DB_NAME', 'u955229223_propertease');
    } else {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'propertease_new');
    }

    // Remote SQL DB
    // define('DB_HOST', 'srv1673.hstgr.io');
    // define('DB_USER', 'u955229223_propertease');
    // define('DB_PASS', 'Abhinav@Developer2024');
    // define('DB_NAME', 'u955229223_propertease');

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
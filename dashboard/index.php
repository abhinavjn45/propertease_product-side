<?php 
    require_once('./assets/includes/config/config.php');
    require_once('./assets/includes/functions/database_functions/db-user-registration.php');
    require_once('./assets/includes/functions/utility/utility_functions.php');

    // Session Guard: Ensure user is logged in
    if (!isset($_SESSION['user_unique_id'])) {
        header("Location: " . get_site_option('site_url') . "user-auth/login/");
        exit();
    }

    $user_id = $_SESSION['user_unique_id'];
    $user_data = get_user_by_unique_id($user_id);
    
    // Redirect if user not found for some reason
    if (!$user_data) {
        session_destroy();
        header("Location: " . get_site_option('site_url') . "user-auth/login/");
        exit();
    }

    $site_url = get_site_option('site_url');
    $dashboard_url = get_site_option('dashboard_url');

    // Robust Fallback for Dashboard URL
    if (empty($dashboard_url)) {
        $dashboard_url = $site_url . "dashboard/";
    }
    
    // Ensure trailing slash
    $dashboard_url = rtrim($dashboard_url, '/') . '/';
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | <?= get_site_option('site_title') ?></title>
    <link rel="icon" type="image/png" href="<?= $dashboard_url ?>assets/images/favicon.png" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/remixicon.css">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/editor-katex.min.css">
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/lib/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= $dashboard_url ?>assets/css/style.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.siteUrl = '<?= $site_url ?>';
        window.dashboardUrl = '<?= $dashboard_url ?>';
    </script>
</head>
    <body>
        <?php 
            require_once ('./assets/includes/elements/sidebar.php');
        ?>
        <main class="dashboard-main">
            <?php 
                require_once ('./assets/includes/elements/header.php');
            ?>

            <div class="dashboard-main-body">

                <?php
                    if (!isset($_GET['type']) && !isset($_GET['page'])) {
                        require_once ('./assets/includes/pages/dashboard/dashboard.php');
                    }

                    if (isset($_GET['type']) && isset($_GET['page'])) {
                        $type = $_GET['type'];
                        $page = $_GET['page'];

                        if ($type === 'dashboard' && $page === 'dashboard') {
                            require_once ('./assets/includes/pages/dashboard/dashboard.php');
                        }

                        // Society Management Pages
                        if ($type === 'societies') {
                            if ($page === 'manage-societies') {
                                require_once ('./assets/includes/pages/societies/all-societies.php');
                            } elseif ($page === 'add-society') {
                                require_once ('./assets/includes/pages/societies/add-society.php');
                            } elseif ($page === 'finish-verification') {
                                require_once ('./assets/includes/pages/societies/finish_verification.php');
                            }
                        }
                    }
                ?>
            </div>
          
            <?php 
                require_once ('./assets/includes/elements/footer.php');
            ?>
        </main>

        <!-- jQuery library js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/bootstrap.bundle.min.js"></script>
        <!-- Apex Chart js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/apexcharts.min.js"></script>
        <!-- Data Table js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/dataTables.min.js"></script>
        <!-- Iconify Font js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/iconify-icon.min.js"></script>
        <!-- jQuery UI js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/jquery-ui.min.js"></script>
        <!-- Vector Map js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
        <script src="<?= $dashboard_url ?>assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
        <!-- Popup js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/magnifc-popup.min.js"></script>
        <!-- Slick Slider js -->
        <script src="<?= $dashboard_url ?>assets/js/lib/slick.min.js"></script>
        <!-- main js -->
        <script src="<?= $dashboard_url ?>assets/js/app.js"></script>

        <script src="<?= $dashboard_url ?>assets/js/homeTwoChart.js"></script>
    </body>
</html>

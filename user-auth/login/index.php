<?php 
    require_once('../../assets/includes/config/config.php');
    require_once ('../../assets/includes/functions/utility/element_fetcher.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= get_site_option('site_author') ?>">
    <meta name="description" content="<?= get_site_option('site_description') ?>">

    <!-- ======== Page title ============ -->
    <title>Login | <?= get_site_option('site_title') ?></title>

    <!--<< Favcion >>-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('apple_touch_icon') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('favicon_32x32') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('favicon_16x16') ?>">
    <link rel="manifest" href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('site_webmanifest') ?>">

    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/bootstrap.min.css' ?>">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/all.min.css' ?>">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/animate.css' ?>">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/magnific-popup.css' ?>">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/meanmenu.css' ?>">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/swiper-bundle.min.css' ?>">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/nice-select.css' ?>">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/flaticon.css' ?>">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/main.css' ?>">
    <!--<< Chatbot >>-->
    <link rel="stylesheet" href="<?= get_site_option('site_url') . 'assets/css/chatbot.css' ?>">
</head>

<body>

    <?php
        // Preloader
        require_once ('../../assets/includes/elements/preloader.php');

        // GT Back To Top Start
        require_once ('../../assets/includes/elements/back-to-top.php');

        // GT MouseCursor Start
        require_once ('../../assets/includes/elements/mouse-cursor.php');

        // Offcanvas Area Start
        require_once ('../../assets/includes/elements/offcanvas.php');

        // Header Section Start
        require_once ('../../assets/includes/elements/topbar.php');

        require_once ('../../assets/includes/elements/header.php');
    ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Gt Breadcrumb Section Start -->
            <div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('<?= get_site_option('site_url') . 'assets/img/' . get_site_option('breadcrumb_image') ?>');">
                <div class="container">
                    <div class="gt-page-heading">
                        <div class="gt-breadcrumb-sub-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Log In</h1>
                        </div>
                        <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="<?= get_site_option('site_url') ?>">
                                    Home
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                Log In
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- GT Product Section Start -->
            <section class="gt-login-section section-padding">
                <div class="container">
                    <div class="gt-account-box">
                        <h4>Log in to your Account</h4>
                        <!-- Login Form -->
                        <?php 
                            require_once ('../../assets/includes/elements/login-form.php');
                        ?>
                        <p class="login-text">
                            Don't Have An Account? <a href="<?= get_site_option('site_url') . 'get-started/' ?>">Register Now</a>
                        </p>
                    </div>
                </div>
            </section>

            <!-- Gt Footer Section Start -->
            <?php 
                require_once ('../../assets/includes/elements/footer.php');
            ?>
        </div>
    </div>



    <!--<< All JS Plugins >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery-3.7.1.min.js' ?>"></script>
    <!--<< Viewport Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/viewport.jquery.js' ?>"></script>
    <!--<< Bootstrap Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <!--<< nice-selec Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery.nice-select.min.js' ?>"></script>
    <!--<< Waypoints Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery.waypoints.js' ?>"></script>
    <!--<< Counterup Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery.counterup.min.js' ?>"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/swiper-bundle.min.js' ?>"></script>
    <!--<< MeanMenu Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery.meanmenu.min.js' ?>"></script>
    <!--<< Parallaxie Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/parallaxie.js' ?>"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/jquery.magnific-popup.min.js' ?>"></script>
    <!--<< Wow Animation Js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/wow.min.js' ?>"></script>
    <!--<< Main.js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/main.js' ?>"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/config.js' ?>"></script>
    <script src="<?= get_site_option('site_url') . 'assets/js/chatbot.js' ?>"></script>
</body>

</html>
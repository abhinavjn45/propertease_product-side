<?php
    require_once ('../../assets/includes/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gramentheme">
    <meta name="description" content="Propert-Ease - Internal Server Error">
    <!-- ======== Page title ============ -->
    <title>500 - Propert-Ease - Residential Society Governance SaaS</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="../../assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="../../assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <!--<< Chatbot >>-->
    <link rel="stylesheet" href="../../assets/css/chatbot.css">
</head>

<body>

    <!-- Preloader -->
    <?php
        require_once ('../../assets/includes/elements/preloader.php');
    ?>

    <!-- GT Back To Top Start -->
    <?php
        require_once ('../../assets/includes/elements/back-to-top.php');
    ?>

    <!-- GT MouseCursor Start -->
    <?php
        require_once ('../../assets/includes/elements/mouse-cursor.php');
    ?>

    <!-- Offcanvas Area Start -->
    <?php 
        require_once ('../../assets/includes/elements/offcanvas.php');
    ?>

    <!-- Header Section Start -->
    <?php 
        require_once ('../../assets/includes/elements/topbar.php');

        require_once ('../../assets/includes/elements/header.php');
    ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Gt Breadcrumb Section Start -->
            <div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('../../assets/img/breadcrumb-bg.jpg');">
                <div class="container">
                    <div class="gt-page-heading">
                        <div class="gt-breadcrumb-sub-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Error 500</h1>
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
                                Error 500
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- GT Error Section Start -->
            <section class="gt-error-section section-padding fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="gt-error-items">
                                <div class="gt-error-image wow fadeInUp" data-wow-delay=".3s">
                                    <img src="../../assets/img/inner/500.png" alt="img">
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                    Oops! Internal Server Error
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay=".3s">
                                    Something went wrong on our end. We’re already looking into it. 
                                    In the meantime, you can try refreshing the page or head back to the homepage.
                                </p>
                                <a href="<?= get_site_option('site_url') ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".5s">
                                    BACK TO HOME
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Footer Section Start -->
            <section class="gt-footer-section-3 footer-3">
                <div class="footer-dot">
                    <img src="../../assets/img/new-add/footer-dot.png" alt="img">
                </div>
                <div class="gt-cta-section-3 before-white">
                    <div class="container">
                        <div class="gt-cta-wrapper-3 bg-cover"
                            style="background-image: url('../../assets/img/home-3/cta-bg.jpg');">
                            <div class="gt-section-title style-3 mb-0">
                                <h6 class="wow fadeInUp tt-capitalize">connect with us</h6>
                                <h2 class="char-animation">
                                    Zero Commitments. Total Freedom
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".3s">Register your society today. Get started in
                                minutes.
                            </p>
                            <div class="gt-cta-btn wow fadeInUp" data-wow-delay=".5s">
                                <a href="<?= get_site_option('site_url') . 'contact/' ?>" class="gt-theme-btn style-3 bg-header">Get Started</a>
                                <a href="<?= get_site_option('site_url') . 'register/' ?>" class="gt-theme-btn style-3">Register Now</a>
                            </div>
                            <ul class="wow fadeInUp" data-wow-delay=".7s">
                                <li>
                                    <i class="fa-regular fa-circle-check"></i>
                                    14-day free trial
                                </li>
                                <li>
                                    <i class="fa-regular fa-circle-check"></i>
                                    No credit card required
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="gt-footer-widget-wrapper style-2 style-3">
                        <div class="row justify-content-between">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-12 wow fadeInUp"
                                data-wow-delay=".2s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h3>about Propert-Ease</h3>
                                    </div>
                                    <div class="gt-footer-content">
                                        <p>
                                            Propert-Ease is a statutory-first governance platform designed for modern
                                            Indian housing societies. We provide the tools for transparent, audit-ready
                                            management of your community's digital constitution.
                                        </p>
                                        <div class="gt-social-icon d-flex align-items-center">
                                            <a href="#">
                                                <img src="../../assets/img/home-3/play-store.png" alt="img">
                                            </a>
                                            <a href="#">
                                                <img src="../../assets/img/home-3/app-store.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
                                data-wow-delay=".4s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h3>our Company</h3>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="<?= get_site_option('site_url') . 'about/' ?>">
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= get_site_option('site_url') . 'contact/' ?>">
                                                Careers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= get_site_option('site_url') . 'news/' ?>">
                                                news & Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= get_site_option('site_url') . 'contact/' ?>">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= get_site_option('site_url') . 'pricing/' ?>">
                                                Pricing Plan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
                                data-wow-delay=".6s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h3>Legal Resources</h3>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="#">
                                                Features
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Key Goods
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Pro Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Pricing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Changelog
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-8 ps-xxl-5 wow fadeInUp"
                                data-wow-delay=".8s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h3>Governance Modules</h3>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="#">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Events
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Help center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Tutorials
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Support
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gt-footer-bottom-3">
                        <a href="<?= get_site_option('site_url') ?>" class="footer-logo">
                            <img src="../../assets/img/logo/<?= get_site_option('site_logo') ?>" alt="img" style="max-width: 150px;">
                        </a>
                        <p>Copyright Propert-Ease. Design By <b>GramenTheme</b></p>
                        <div class="gt-social-icon d-flex align-items-center style-home-3">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>



    <!--<< All JS Plugins >>-->
    <script src="../../assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="../../assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <!--<< nice-selec Js >>-->
    <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="../../assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="../../assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="../../assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="../../assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Parallaxie Js >>-->
    <script src="../../assets/js/parallaxie.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="../../assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="../../assets/js/main.js"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script src="../../assets/js/config.js"></script>
    <script src="../../assets/js/chatbot.js"></script>
</body>

</html>
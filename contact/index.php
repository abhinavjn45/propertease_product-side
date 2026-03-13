<?php 
    require_once('../assets/includes/config/config.php');
    require_once ('../assets/includes/functions/utility/element_fetcher.php');
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
    <title>Contact Us - <?= get_site_option('site_title') ?></title>
    
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
        require_once ('../assets/includes/elements/preloader.php');

        // GT Back To Top Start
        require_once ('../assets/includes/elements/back-to-top.php');

        // GT MouseCursor Start
        require_once ('../assets/includes/elements/mouse-cursor.php');

        // Offcanvas Area Start
        require_once ('../assets/includes/elements/offcanvas.php');

        // Header Section Start
        require_once ('../assets/includes/elements/topbar.php');

        require_once ('../assets/includes/elements/header.php');
    ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Gt Breadcrumb Section Start -->
            <div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('<?= get_site_option('site_url') . 'assets/img/' . get_site_option('breadcrumb_image') ?>');">
                <div class="container">
                    <div class="gt-page-heading">
                        <div class="gt-breadcrumb-sub-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
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
                                Contact Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Info Section Start -->
            <section class="contact-info-section fix section-padding">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact-info-items text-center active">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h3>Our Address</h3>
                                    <p>
                                        <?= get_site_option('site_address') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="contact-info-items text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h3><a
                                            href="mailto:<?php echo get_site_option('admin_email'); ?>"><?= get_site_option('admin_email') ?></a>
                                    </h3>
                                    <p>
                                        Email us anytime for any kind <br>
                                        of query.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact-info-items text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="tel:+919876543210">+91 98765 43210</a></h3>
                                    <p>
                                        Call us any kind support, we <br>
                                        will wait for it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section Start -->
            <section class="contact-section-33 fix section-padding pt-0">
                <div class="container">
                    <div class="contact-wrapper-2">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <div class="map-items">
                                    <div class="googpemap">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.2918623679834!2d77.60344707514088!3d12.934299987437653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15b277a93807%3A0x88518f37b39dabd0!2sChrist%20University!5e1!3m2!1sen!2sin!4v1773392425568!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-content">
                                    <h2 class="inner-font fw-700 text-header-color">Ready to Get Started?</h2>
                                    <p>
                                        Transition your society to a transparent, audit-ready governance model. Contact our team today to discuss how Propert-Ease can automate your statutory compliance and simplify administrative workflows.
                                    </p>

                                    <!-- Contact Us Form -->
                                    <?php 
                                        require_once ('../assets/includes/elements/contact-us-form.php');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Gt Footer Section Start -->
            <?php 
                require_once ('../assets/includes/elements/footer.php');
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
    <!--Ajax Mail-->
    <script src="<?= get_site_option('site_url') . 'assets/js/ajax-mail.js' ?>"></script>
    <!--<< SweetAlert2 >>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--<< Main.js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/main.js' ?>"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/config.js' ?>"></script>
    <script src="<?= get_site_option('site_url') . 'assets/js/chatbot.js' ?>"></script>
</body>

</html>
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
    <title>Get Started | <?= get_site_option('site_title') ?></title>
    
    <!--<< Favcion >>-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/<?= get_site_option('apple_touch_icon') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/<?= get_site_option('favicon_32x32') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/<?= get_site_option('favicon_16x16') ?>">
    <link rel="manifest" href="../assets/img/favicon/<?= get_site_option('site_webmanifest') ?>">

    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="../assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!--<< Chatbot >>-->
    <link rel="stylesheet" href="../assets/css/chatbot.css">
    <!--<< SweetAlert2 >>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <div class="gt-breadcrumb-wrapper bg-cover"
                style="background-image: url('<?= get_site_option('site_url') . 'assets/img/' . get_site_option('breadcrumb_image') ?>');">
                <div class="container">
                    <div class="gt-page-heading">
                        <div class="gt-breadcrumb-sub-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Register Your Society</h1>
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
                                Get Started
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- Contact Section Start -->
            <section class="fix section-padding pt-8 px-8">
                <div class="container">
                    <div class="compliance-demo-wrapper" style="
                        border-radius: 24px;
                        overflow: hidden;
                        box-shadow: 0 25px 60px rgba(0,0,0,0.08);
                    ">
                        <div class="row g-0">
                            <!-- Left Info Panel -->
                            <div class="col-lg-5">
                                <div style="
                                    background: linear-gradient(145deg, #2D31FA 0%, #1a1d8f 50%, #0e1060 100%);
                                    padding: 60px 45px;
                                    height: 100%;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    position: relative;
                                    overflow: hidden;
                                ">
                                    <!-- Decorative circles -->
                                    <div
                                        style="position:absolute;top:-60px;right:-60px;width:200px;height:200px;border-radius:50%;background:rgba(255,255,255,0.05);">
                                    </div>
                                    <div
                                        style="position:absolute;bottom:-40px;left:-40px;width:150px;height:150px;border-radius:50%;background:rgba(255,255,255,0.03);">
                                    </div>
                                    <div
                                        style="position:absolute;top:50%;right:20px;width:80px;height:80px;border-radius:50%;border:1px solid rgba(255,255,255,0.1);">
                                    </div>

                                    <div style="position:relative;z-index:2;">
                                        <span style="
                                            display:inline-block;
                                            background: rgba(255,255,255,0.15);
                                            color: #fff;
                                            padding: 6px 16px;
                                            border-radius: 50px;
                                            font-size: 13px;
                                            font-weight: 600;
                                            letter-spacing: 1px;
                                            text-transform: uppercase;
                                            margin-bottom: 24px;
                                            backdrop-filter: blur(10px);
                                        ">🚀 Get Started</span>
                                        <h2 style="
                                            color: #fff;
                                            font-size: 32px;
                                            font-weight: 700;
                                            line-height: 1.3;
                                            margin-bottom: 16px;
                                        ">Register with <br>Propert-Ease</h2>
                                        <p style="
                                            color: rgba(255,255,255,0.75);
                                            font-size: 15px;
                                            line-height: 1.7;
                                            margin-bottom: 40px;
                                        ">
                                            Sign up today and unlock the full <b style="color:#fff;">Propert-Ease</b>
                                            platform. Here's what you get when you register:
                                        </p>

                                        <!-- Feature highlights -->
                                        <div style="display:flex;flex-direction:column;gap:20px;">
                                            <div style="display:flex;align-items:flex-start;gap:14px;">
                                                <div style="
                                                    min-width:44px;height:44px;
                                                    background:rgba(255,255,255,0.12);
                                                    border-radius:12px;
                                                    display:flex;align-items:center;justify-content:center;
                                                    backdrop-filter:blur(10px);
                                                ">
                                                    <i class="fa-solid fa-shield-halved"
                                                        style="color:#7dd3fc;font-size:18px;"></i>
                                                </div>
                                                <div>
                                                    <h5
                                                        style="color:#fff;font-size:15px;font-weight:600;margin-bottom:4px;">
                                                        Society Dashboard Access</h5>
                                                    <p
                                                        style="color:rgba(255,255,255,0.6);font-size:13px;margin:0;line-height:1.5;">
                                                        Real-time billing, maintenance tracking & resident portal</p>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:flex-start;gap:14px;">
                                                <div style="
                                                    min-width:44px;height:44px;
                                                    background:rgba(255,255,255,0.12);
                                                    border-radius:12px;
                                                    display:flex;align-items:center;justify-content:center;
                                                    backdrop-filter:blur(10px);
                                                ">
                                                    <i class="fa-solid fa-chart-line"
                                                        style="color:#a78bfa;font-size:18px;"></i>
                                                </div>
                                                <div>
                                                    <h5
                                                        style="color:#fff;font-size:15px;font-weight:600;margin-bottom:4px;">
                                                        RCS & RERA Compliance Toolkit</h5>
                                                    <p
                                                        style="color:rgba(255,255,255,0.6);font-size:13px;margin:0;line-height:1.5;">
                                                        Auto-generated statutory reports & regulatory filings</p>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:flex-start;gap:14px;">
                                                <div style="
                                                    min-width:44px;height:44px;
                                                    background:rgba(255,255,255,0.12);
                                                    border-radius:12px;
                                                    display:flex;align-items:center;justify-content:center;
                                                    backdrop-filter:blur(10px);
                                                ">
                                                    <i class="fa-solid fa-clock-rotate-left"
                                                        style="color:#34d399;font-size:18px;"></i>
                                                </div>
                                                <div>
                                                    <h5
                                                        style="color:#fff;font-size:15px;font-weight:600;margin-bottom:4px;">
                                                        Dedicated Onboarding Support</h5>
                                                    <p
                                                        style="color:rgba(255,255,255,0.6);font-size:13px;margin:0;line-height:1.5;">
                                                        Free data migration & a dedicated specialist to get you started
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Trust stats -->
                                        <div style="
                                            margin-top:40px;
                                            padding-top:28px;
                                            border-top:1px solid rgba(255,255,255,0.12);
                                            display:flex;
                                            gap:30px;
                                        ">
                                            <div>
                                                <h4
                                                    style="color:#fff;font-size:24px;font-weight:700;margin-bottom:2px;">
                                                    500 +</h4>
                                                <p
                                                    style="color:rgba(255,255,255,0.5);font-size:12px;margin:0;text-transform:uppercase;letter-spacing:0.5px;">
                                                    Societies</p>
                                            </div>
                                            <div>
                                                <h4
                                                    style="color:#fff;font-size:24px;font-weight:700;margin-bottom:2px;">
                                                    99.9 %</h4>
                                                <p
                                                    style="color:rgba(255,255,255,0.5);font-size:12px;margin:0;text-transform:uppercase;letter-spacing:0.5px;">
                                                    Uptime</p>
                                            </div>
                                            <div>
                                                <h4
                                                    style="color:#fff;font-size:24px;font-weight:700;margin-bottom:2px;">
                                                    4.9 ★</h4>
                                                <p
                                                    style="color:rgba(255,255,255,0.5);font-size:12px;margin:0;text-transform:uppercase;letter-spacing:0.5px;">
                                                    Rating</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Form Panel -->
                            <div class="col-lg-7">
                                <div style="
                                    background: #f8f9fc;
                                    padding: 55px 50px;
                                    height: 100%;
                                ">
                                    <div style="margin-bottom:30px;">
                                        <h3 style="
                                            font-size: 24px;
                                            font-weight: 700;
                                            color: #1a1a2e;
                                            margin-bottom: 8px;
                                        ">Create your Account</h3>
                                        <p style="color:#666;font-size:14px;margin:0;">
                                            Fill in the details below to create your account.
                                        </p>
                                    </div>
                                    <!-- Get Started Registration Form -->
                                    <?php 
                                        require_once ('../assets/includes/elements/get-started-form.php');
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
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="../assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--<< nice-selec Js >>-->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="../assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Parallaxie Js >>-->
    <script src="../assets/js/parallaxie.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="../assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="../assets/js/main.js"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/chatbot.js"></script>
</body>

</html>
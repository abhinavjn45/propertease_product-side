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
    <title>About | <?= get_site_option('site_title') ?></title>

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
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">About <span>Us</span></h1>
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
                                About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gt Brand Section Start -->
            <div class="gt-brand-section section-padding pb-0">
                <div class="container">
                    <div class="gt-brand-wrapper">
                        <h5 class="color-3 pt-0 char-animation">TRUSTED BY <b>1500+</b> CUSTOMERS</h5>
                        <div class="swiper gt-brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-01.png' ?>" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-02.png' ?>" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-03.png' ?>" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-04.png' ?>" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-05.png' ?>" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-1/brand/brand-06.png' ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gt About Section Start -->
            <section class="gt-about-section fix section-padding pt-0">
                <div class="container">
                    <div class="gt-about-wrapper-3 section-padding pb-0">
                        <div class="clicp-shape">
                            <img src="<?= get_site_option('site_url') . 'assets/img/new-add/clip-path.png' ?>" alt="img">
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="gt-about-content">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="tt-capitalize wow fadeInUp">Why Propert-Ease Governance</h6>
                                        <h2 class="char-animation">
                                            Establish a legacy of
                                            transparent governance
                                        </h2>
                                    </div>
                                    <p class="gt-text wow fadeInUp" data-wow-delay=".3s">
                                        Traditional housing management is cluttered with manual registers and fragmented
                                        communication. Propert-Ease consolidates your society's administrative, legal,
                                        and financial ecosystem into a single, unified Digital Constitution. We ensure
                                        your Management Committee stays ahead of RCS mandates while delivering a
                                        seamless, digital-first experience for every resident.
                                    </p>
                                    <ul class="gt-list-items wow fadeInUp" data-wow-delay=".5s">
                                        <li>
                                            <span class="gt-circle-box"></span>
                                            <div class="gt-content">
                                                <h4>Statutory-First Architecture</h4>
                                                <span>
                                                    Specifically engineered for Indian Housing Laws. From RERA defect
                                                    liability tracking to automated Section 79 returns, our platform
                                                    ensures your society is always audit-ready.
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="gt-circle-box"></span>
                                            <div class="gt-content">
                                                <h4>White-Glove Implementation</h4>
                                                <span>
                                                    Transitioning shouldn't be a hurdle. Enjoy free data migration,
                                                    expert-led committee training, and a custom domain setup—all
                                                    included in our premium onboarding experience.
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="gt-circle-box"></span>
                                            <div class="gt-content">
                                                <h4>Next-Generation Transparency</h4>
                                                <span>
                                                    Move beyond WhatsApp groups. Empower residents with a professional
                                                    portal to view sanctioned plans, meeting minutes, and financial
                                                    disclosures in real-time.
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="gt-about-image agn-choose-5-img">
                                    <div class="crm-imagewow wow fadeInRight" data-wow-delay=".3s">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/new-add/crm-img.png' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison Section Start -->
                    <div class="gt-comparison-section section-padding pb-0">
                        <div class="gt-section-title style-3 text-center">
                            <h6 class="wow fadeInUp">Market Comparison</h6>
                            <h2 class="char-animation">Governance vs. Convenience</h2>
                        </div>
                        <div class="table-responsive wow fadeInUp" data-wow-delay=".3s">
                            <table class="table gt-comparison-table">
                                <thead>
                                    <tr>
                                        <th>Feature Focus</th>
                                        <th>Existing Systems (NoBrokerHood, MyGate, ADDA)</th>
                                        <th>Propert-Ease Governance Platform</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Core Focus</strong></td>
                                        <td>Visitor Management & Billing (Operational Convenience)</td>
                                        <td>Statutory Compliance & Legal Accountability (Governance)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Custom Domains</strong></td>
                                        <td>None (Closed platform)</td>
                                        <td>Dedicated White-Labeled Society Websites</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Regulatory Reporting</strong></td>
                                        <td>Limited/None</td>
                                        <td>Automated Section 79 & RERA Defect Tracking</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Audit Trails</strong></td>
                                        <td>Erasable/Dynamic</td>
                                        <td>Immutable Digital Constitution for Official Documents</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Stakeholder Access</strong></td>
                                        <td>Residents & Committees only</td>
                                        <td>Residents, Committees, AND Government Authorities</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Feature Section Start -->
            <section class="gt-feature-section-3 fix section-padding pt-0">
                <div class="gt-feature-focus-wrapper section-padding">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="gt-feature-image">
                                    <img src="<?= get_site_option('site_url') . 'assets/img/home-3/feature-focus.png' ?>" alt="img" class="appear_left">
                                    <div class="bg-shape">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/home-3/focus-bg.png' ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="gt-feature-content">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="text-white tt-capitalize wow fadeInUp">Smarter Compliance Automation
                                        </h6>
                                        <h2 class="text-white char-animation">
                                            Automate legal filings,
                                            focus on your community
                                        </h2>
                                    </div>
                                    <div class="gt-counter-items">
                                        <div class="gt-counter wow fadeInUp" data-wow-delay=".3s">
                                            <h2>
                                                <span class="gt-count">92</span> %
                                            </h2>
                                            <p>Audit Readiness & RCS Compliance</p>
                                        </div>
                                        <div class="gt-counter wow fadeInUp" data-wow-delay=".5s">
                                            <h2>
                                                <span class="gt-count">48</span> %
                                            </h2>
                                            <p>Reduction in Paperwork & Manual Filing</p>
                                        </div>
                                    </div>
                                    <p class="text text-white wow fadeInUp" data-wow-delay=".7s">
                                        Stop chasing paper trails for RERA defect liability or scrambling for Section 79
                                        returns. Propert-Ease automates the statutory busy work, ensuring your society's
                                        "Digital Constitution" is always up-to-date. Our intelligent tracking system
                                        alerts you to upcoming audit deadlines and structural warranty expirations
                                        before they become legal liabilities.
                                    </p>
                                    <div class="gt-btn-all wow fadeInUp" data-wow-delay=".9s">
                                        <a href="<?= get_site_option('site_url') . 'get-started/' ?>" class="gt-theme-btn style-3">get started</a>
                                        <a href="<?= get_site_option('site_url') . 'contact/' ?>" class="gt-theme-btn style-3 style-border">view demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Web App Section Start -->
            <section class="gt-web-app-section fix section-padding section-bg-4">
                <div class="container">
                    <div class="gt-web-app-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <div class="gt-web-app-content">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="wow fadeInUp tt-capitalize">integration web apps</h6>
                                        <h2 class="char-animation">
                                            Everything you need to <br> close a deal, all in one spot
                                        </h2>
                                    </div>
                                    <p class="web-text wow fadeInUp" data-wow-delay=".3s">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage
                                    </p>
                                    <div class="gt-client-box-items top_view_2 item-hover">
                                        <p>
                                            Keep all your contacts, deals, and interactions in one place. No more
                                            hunting through emails or spreadsheets — get a 360° view of every customer.
                                        </p>
                                        <div class="gt-info">
                                            <img src="<?= get_site_option('site_url') . 'assets/img/home-3/client.png' ?>" alt="img">
                                            <span><b>Erika Neeley,</b> Women Rocking Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="gt-web-app-image agn-choose-5-img">
                                    <div class="web-app wow fadeInRight" data-wow-delay=".3s">
                                        <img src="<?= get_site_option('site_url') . 'assets/img/new-add/web-app.png' ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt News Section Start -->
            <section class="gt-news-section-4 fix section-padding">
                <div class="container">
                    <div class="gt-news-wrapper-4">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="gt-news-left">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="wow fadeInUp tt-capitalize">Propert-Ease news</h6>
                                        <h2>
                                            Check Out Latest News Update & Articles
                                        </h2>
                                    </div>
                                    <p class="gt-news-text wow fadeInUp" data-wow-delay=".3s">
                                        Stay updated with our latest news, insights, and success stories to discover how
                                        we’re helping businesses grow through smart marketing.
                                    </p>
                                    <a href="<?= get_site_option('site_url') . 'news/' ?>" class="gt-theme-btn style-4 wow fadeInUp"
                                        data-wow-delay=".5s">view all news</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="gt-news-box-items-3 style-3">
                                            <div class="gt-thumb">
                                                <img src="<?= get_site_option('site_url') . 'assets/img/home-4/news/news-01.jpg' ?>" alt="img">
                                                <img src="<?= get_site_option('site_url') . 'assets/img/home-4/news/news-01.jpg' ?>" alt="img">
                                            </div>
                                            <div class="gt-content">
                                                <ul>
                                                    <li>
                                                        Jun 28, 2025
                                                    </li>
                                                    <li>
                                                        Seen 250
                                                    </li>
                                                </ul>
                                                <h4>
                                                    <a href="<?= get_site_option('site_url') . 'news-details/' ?>">Why Loading Speed Can Make or Break Your
                                                        App’s Success</a>
                                                </h4>
                                                <span>
                                                    <img src="<?= get_site_option('site_url') . 'assets/img/home-3/news/info.png' ?>" alt="img">
                                                    Propert-Ease admin
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="gt-news-box-items-3 style-3">
                                            <div class="gt-thumb">
                                                <img src="<?= get_site_option('site_url') . 'assets/img/home-4/news/news-02.jpg' ?>" alt="img">
                                                <img src="<?= get_site_option('site_url') . 'assets/img/home-4/news/news-02.jpg' ?>" alt="img">
                                            </div>
                                            <div class="gt-content">
                                                <ul>
                                                    <li>
                                                        Jun 28, 2025
                                                    </li>
                                                    <li>
                                                        Seen 250
                                                    </li>
                                                </ul>
                                                <h4>
                                                    <a href="<?= get_site_option('site_url') . 'news-details/' ?>">How to Integrate Analytics for Better
                                                        App Landing Insights</a>
                                                </h4>
                                                <span>
                                                    <img src="<?= get_site_option('site_url') . 'assets/img/home-3/news/info.png' ?>" alt="img">
                                                    Propert-Ease admin
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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
    <!--<< Main.js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/main.js' ?>"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/config.js' ?>"></script>
    <script src="<?= get_site_option('site_url') . 'assets/js/chatbot.js' ?>"></script>
</body>

</html>
<?php
require_once('./assets/includes/config/config.php');
require_once('./assets/includes/functions/utility/element_fetcher.php');
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
    <title><?= get_site_option('site_title') . " | " . get_site_option('site_tagline') ?></title>

    <!--<< Favcion >>-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('apple_touch_icon') ?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('favicon_32x32') ?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('favicon_16x16') ?>">
    <link rel="manifest"
        href="<?= get_site_option('site_url') . 'assets/img/favicon/' . get_site_option('site_webmanifest') ?>">

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

<body class="body-bg-2">

    <?php
    // Preloader
    require_once('./assets/includes/elements/preloader.php');

    // GT Back To Top Start
    require_once('./assets/includes/elements/back-to-top.php');

    // GT MouseCursor Start
    require_once('./assets/includes/elements/mouse-cursor.php');

    // Offcanvas Area Start
    require_once('./assets/includes/elements/offcanvas.php');

    // Header Section Start
    require_once('./assets/includes/elements/topbar.php');

    require_once('./assets/includes/elements/header.php');
    ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Gt Hero Section Start -->
            <section class="gt-hero-section gt-hero-3">
                <div class="hero-circle-shape">
                    <img src="<?= get_site_option('site_url') . 'assets/img/home-3/' . get_hero_section_data('background_image') ?>"
                        alt="img">
                </div>
                <div class="container">
                    <div class="gt-hero-content">
                        <h1 class="char-animation">
                            <?= get_hero_section_data('main_heading') ?>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            <?= get_hero_section_data('hero_paragraph') ?>
                        </p>

                        <!-- Hero Section Form -->
                        <?php
                        require_once('./assets/includes/elements/hero-email-form.php')
                            ?>

                        <ul class="wow fadeInUp" data-wow-delay=".7s">
                            <?= get_hero_section_data('list_items') ?>
                        </ul>
                    </div>
                    <div class="gt-hero-image">
                        <img src="<?= get_site_option('site_url') . 'assets/img/home-3/hero/' . get_hero_section_data('main_image') ?>"
                            alt="img">
                        <div class="gt-hero-left">
                            <img src="<?= get_site_option('site_url') . 'assets/img/home-3/hero/' . get_hero_section_data('left_image') ?>"
                                alt="img">
                        </div>
                        <div class="gt-hero-right">
                            <img src="<?= get_site_option('site_url') . 'assets/img/home-3/hero/' . get_hero_section_data('right_image') ?>"
                                alt="img">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Brand Section Start -->
            <div class="gt-brand-section section-padding pb-0">
                <div class="container">
                    <div class="gt-brand-wrapper">
                        <h5 class="color-3 pt-0 char-animation">TRUSTED BY <b>1500+</b> RESIDENTIAL BUILDINGS</h5>
                        <div class="swiper gt-brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-01.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-02.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-03.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-04.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-05.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-brand-image text-center hover-2">
                                        <img src="assets/img/home-1/brand/brand-06.png" alt="img">
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
                            <img src="assets/img/new-add/clip-path.png" alt="img">
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
                                        <img src="https://ex-coders.com/html/boostly/assets/img/new-add/crm-img.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
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
                                    <img src="assets/img/home-3/feature-focus.png" alt="img" class="appear_left">
                                    <div class="bg-shape">
                                        <img src="assets/img/home-3/focus-bg.png" alt="img">
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
                                                <span class="gt-count">100</span> %
                                            </h2>
                                            <p>Audit Readiness & RCS Compliance</p>
                                        </div>
                                        <div class="gt-counter wow fadeInUp" data-wow-delay=".5s">
                                            <h2>
                                                <span class="gt-count">65</span> %
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
                                        <a href="contact.html" class="gt-theme-btn style-3">Book Your Migration</a>
                                        <a href="contact.html" class="gt-theme-btn style-3 style-border">Explore Live
                                            Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Feature Benefit Section Start -->
            <section class="gt-feature-benefit-section section-padding pt-0">
                <div class="container">
                    <div class="gt-section-title style-3 text-center">
                        <h6 class="wow fadeInUp tt-capitalize">Advanced Governance Features</h6>
                        <h2 class="char-animation">
                            Empowering Societies with Propert-Ease
                        </h2>
                        <p class="mt-3 wow fadeInUp" data-wow-delay=".3s">
                            A scalable Multi-Tenant SaaS framework designed to digitize administrative workflows <br>
                            and ensure 100% adherence to RERA and RCS directives.
                        </p>
                    </div>
                    <div class="gt-feature-benefit-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="gt-feature-benefit-items">
                                    <div class="bg-shape">
                                        <img src="assets/img/new-add/bg-share.png" alt="">
                                    </div>
                                    <ul>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>Custom Domain White-Labeling</h3>
                                                <p>
                                                    Every society receives a unique digital identity. Our on-demand
                                                    domain mapping allows you to host your portal on a custom URL,
                                                    fulfilling the legal mandate for a public-facing society website.
                                                </p>
                                                <span class="gt-number">
                                                    01
                                                </span>
                                            </div>
                                        </li>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>RERA Defect Liability Tracker</h3>
                                                <p>
                                                    Monitor the builder’s 5-year structural warranty with precision. Our
                                                    automated timeline alerts the committee to conduct audits and raise
                                                    grievances before the liability period expires.
                                                </p>
                                                <span class="gt-number">
                                                    02
                                                </span>
                                            </div>
                                        </li>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>Section 79 Statutory Vault</h3>
                                                <p>
                                                    Securely archive and automate the filing of Annual Returns, Rule 51
                                                    Audit reports, and AGM minutes. Maintain an immutable digital trail
                                                    that is always ready for RCS inspections.
                                                </p>
                                                <span class="gt-number">
                                                    03
                                                </span>
                                            </div>
                                        </li>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>Centralized Member Directory</h3>
                                                <p>
                                                    Manage resident profiles, occupancy status, and ownership records in
                                                    a single, secure database. Say goodbye to fragmented spreadsheets
                                                    and outdated physical registers.
                                                </p>
                                                <span class="gt-number">
                                                    04
                                                </span>
                                            </div>
                                        </li>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>Digital Circulars & Notices</h3>
                                                <p>
                                                    Broadcast official notices instantly to all residents. Each circular
                                                    is timestamped and archived, serving as legal proof of communication
                                                    for the Management Committee.
                                                </p>
                                                <span class="gt-number">
                                                    05
                                                </span>
                                            </div>
                                        </li>
                                        <li class="sticky-fixed-panel2">
                                            <div class="gt-benefit-content">
                                                <h3>Audit-Ready Financial Analytics</h3>
                                                <p>
                                                    Gain a 360° view of society finances. Generate transparent reports
                                                    on maintenance collections and expenditures, fostering trust and
                                                    financial accountability within the community.
                                                </p>
                                                <span class="gt-number">
                                                    06
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="gt-feature-box-image sticky-style">
                                    <div class="bg-shape">
                                        <img src="assets/img/home-3/benefit-bg.png" alt="img">
                                    </div>
                                    <div class="image-1 top_view_2 itop_view_2 item-hover">
                                        <img src="assets/img/home-3/benefit-img-1.png" alt="img">
                                    </div>
                                    <div class="image-2 wow fadeInUp top_view_2 item-hover">
                                        <img src="assets/img/home-3/benefit-img-2.png" alt="img">
                                    </div>
                                    <div class="image-3 top_view_2 top_view_2 item-hover">
                                        <img src="assets/img/home-3/benefit-img-3.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Contact Management Section Start -->
            <section class="gt-contact-management-section pb-0 fix section-padding bg-cover"
                style="background-image: url('assets/img/home-3/contact-managenment-bg.jpg');">
                <div class="container">
                    <div class="gt-section-title style-3 text-center">
                        <h6 class="wow fadeInUp tt-capitalize">Member Governance Portal</h6>
                        <h2 class="char-animation">
                            Empower community collaboration
                        </h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="gt-contact-managenment-image text-center mt-30 top_view_2 item-hover">
                                <div class="shape-3">
                                    <img src="assets/img/new-add/shape3.png" alt="">
                                </div>
                                <img src="assets/img/home-3/customer-img.png" alt="img" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Product Tour Section Start -->
            <section class="gt-product-tour-section fix section-padding">
                <div class="container">
                    <div class="gt-section-title style-3 text-center">
                        <h6 class="wow fadeInUp tt-capitalize">Propert-Ease screenshots</h6>
                        <h2 class="char-animation">
                            Take a product tour
                        </h2>
                    </div>
                    <div class="gt-product-tour-wrapper">
                        <div class="swiper gt-product-tour-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gt-product-tour-image">
                                        <img src="assets/img/home-3/product-tour/product-tour-01.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-product-tour-image">
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/product-tour/product-tour-02.png"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-product-tour-image">
                                        <img src="assets/img/home-3/product-tour/product-tour-03.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gt-product-tour-image">
                                        <img src="assets/img/home-3/product-tour/product-tour-03.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gt-product-dot">
                        <span class="dot-content">
                            <span>Propert-Ease dashboard</span>
                        </span>
                        <span class="dot-content">
                            <span>Anomaly detection</span>
                        </span>
                        <span class="dot-content">
                            <span>Best time to contact</span>
                        </span>
                        <span class="dot-content">
                            <span>Sentiment analysis</span>
                        </span>
                    </div>
                </div>
            </section>

            <!-- Gt Why Choose Section Start -->
            <section class="gt-why-choose-us-section-3">
                <div class="gt-why-choose-us-wrapper-3 section-padding">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="gt-choose-us-image appear_left">
                                    <img src="assets/img/home-3/choose-us.png" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="gt-choose-us-content">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="text-white tt-capitalize wow fadeInUp">Why Propert-Ease Governance
                                        </h6>
                                        <h2 class="text-white char-animation">
                                            Transition from messy files to a secure digital constitution
                                        </h2>
                                    </div>
                                    <div class="faq-items mt-0 ms-0">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                        aria-expanded="true" aria-controls="collapsefour">
                                                        Tailored for Indian Society Laws
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Unlike global CRMs, Propert-Ease is built exclusively for
                                                            the Indian landscape. We integrate specific modules for the
                                                            Delhi Cooperative Societies (DCS) Act and RERA mandates,
                                                            ensuring your society remains 100% compliant with local
                                                            statutory requirements.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        Automated Audit & Compliance Tracking
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Never miss a Section 79 return or an Annual General Meeting
                                                            (AGM) deadline again. Our smart notification engine tracks
                                                            your society's legal calendar and alerts the committee to
                                                            upcoming filings and structural audit milestones.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Zero-Code White-Labeled Experience
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            You don't need to be an IT expert to go digital. We provide
                                                            a complete white-labeled solution on your own custom domain.
                                                            Our "white-glove" setup team handles the migration and
                                                            technical mapping so your society can launch its portal
                                                            instantly.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="contact.html" class="gt-theme-btn style-3 wow fadeInUp"
                                        data-wow-delay=".9s">Schedule Your Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Web App Section Start -->
            <section class="gt-web-app-section fix section-padding">
                <div class="container">
                    <div class="gt-web-app-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <div class="gt-web-app-content">
                                    <div class="gt-section-title style-3 mb-0">
                                        <h6 class="wow fadeInUp tt-capitalize">Unified Governance Dashboard</h6>
                                        <h2 class="char-animation">
                                            Everything you need to <br> manage your society, all in one spot
                                        </h2>
                                    </div>
                                    <p class="web-text wow fadeInUp" data-wow-delay=".3s">
                                        Propert-Ease eliminates the chaos of switching between WhatsApp groups, physical
                                        files, and complex spreadsheets. Our cloud-based interface provides a "single
                                        source of truth" for your society's administrative, financial, and legal health.
                                        Manage members, track structural warranties, and file government returns from a
                                        unified web environment.
                                    </p>
                                    <div class="gt-client-box-items top_view_2 item-hover">
                                        <p>
                                            "The transition to Propert-Ease was seamless. Having our society's bye-laws
                                            and financial records on our own custom domain has brought a level of
                                            professional transparency we never thought possible."
                                        </p>
                                        <div class="gt-info">
                                            <img src="assets/img/home-3/client.png" alt="RWA Secretary">
                                            <span><b>Rajesh Malhotra,</b> General Secretary, Silver Arch Enclave</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="gt-web-app-image agn-choose-5-img">
                                    <div class="web-app wow fadeInRight" data-wow-delay=".3s">
                                        <img src="assets/img/new-add/web-app.png"
                                            alt="Propert-Ease Web Application Interface">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Pricing Section Start -->
            <section class="gt-pricing-section-3 fix section-padding bg-cover"
                style="background-image: url('assets/img/home-3/pricing-bg.jpg');">
                <div class="container">
                    <div class="gt-section-title text-center style-3">
                        <h6 class="wow fadeInUp tt-capitalize">Flexible Governance Plans</h6>
                        <h2 class="char-animation">
                            Propert-Ease Membership Plans
                        </h2>
                    </div>
                    <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-two__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="pt-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#pt-1" type="button" role="tab" aria-controls="pt-1"
                                        aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="pt-2-tab" data-bs-toggle="tab" data-bs-target="#pt-2"
                                        type="button" role="tab" aria-controls="pt-2" aria-selected="false"
                                        tabindex="-1">Yearly</button>

                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="pricing__tab-content">
                        <div class="shape1">
                            <img src="assets/img/new-icon/shape3.png" alt="img">
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="pt-1" role="tabpanel" aria-labelledby="pt-1-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6 left_view">
                                        <div class="gt-pricing-box-items pricing-style-3">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>₹</sup>
                                                    1,499
                                                    <sub>/mo</sub>
                                                </h2>
                                                <br>
                                                <span class="sub-texts">Standard</span>
                                            </div>
                                            <a href="contact.html" class="gt-theme-btn">Request Demo</a>
                                            <ul class="gt-pricing-list">
                                                <li><i class="fa-solid fa-circle-check"></i> Subdomain
                                                    (society.propertease.com)</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Up to 100 Members</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Digital Circulars</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Statutory Vault (Basic)
                                                </li>
                                                <li><i class="fa-solid fa-circle-xmark" style="color: #666;"></i> Custom
                                                    Domain Mapping</li>
                                                <li><i class="fa-solid fa-circle-xmark" style="color: #666;"></i> RERA
                                                    Liability Tracker</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 top_view">
                                        <div class="gt-pricing-box-items pricing-style-3 active">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>₹</sup>
                                                    2,999
                                                    <sub>/mo</sub>
                                                </h2>
                                                <br>
                                                <span class="sub-texts">Professional</span>
                                            </div>
                                            <a href="contact.html" class="gt-theme-btn">Request Demo</a>
                                            <ul class="gt-pricing-list">
                                                <li><i class="fa-solid fa-circle-check"></i> <strong>White-Labeled
                                                        Custom Domain</strong></li>
                                                <li><i class="fa-solid fa-circle-check"></i> Up to 500 Members</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Automated Section 79 Filing
                                                </li>
                                                <li><i class="fa-solid fa-circle-check"></i> RERA Compliance Monitor
                                                </li>
                                                <li><i class="fa-solid fa-circle-check"></i> Priority Email Support</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Free Data Migration</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 right_view">
                                        <div class="gt-pricing-box-items pricing-style-3">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>₹</sup>
                                                    5,499
                                                    <sub>/mo</sub>
                                                </h2>
                                                <br>
                                                <span class="sub-texts">Elite</span>
                                            </div>
                                            <a href="contact.html" class="gt-theme-btn">Request Demo</a>
                                            <ul class="gt-pricing-list">
                                                <li><i class="fa-solid fa-circle-check"></i> Unlimited Members</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Multi-Society Dashboard
                                                </li>
                                                <li><i class="fa-solid fa-circle-check"></i> Advanced Financial
                                                    Analytics</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Dedicated Account Manager
                                                </li>
                                                <li><i class="fa-solid fa-circle-check"></i> 24/7 Phone Support</li>
                                                <li><i class="fa-solid fa-circle-check"></i> Custom Feature Development
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pt-2" role="tabpanel" aria-labelledby="pt-2-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6 left_view">
                                        <div class="gt-pricing-box-items pricing-style-3">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>₹</sup>
                                                    32
                                                    <sub>/mo</sub>
                                                </h2>
                                                <span class="sub-texts">pro</span>
                                            </div>
                                            <a href="pricing.html" class="gt-theme-btn">
                                                Get this plan
                                            </a>
                                            <ul class="gt-pricing-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    3 autopilot projects
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic keyword research
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Internal & external linking
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI SEO Recommendations
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Content scheduling
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic publishing
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI & Stock images
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    15% off backlinks
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 top_view">
                                        <div class="gt-pricing-box-items pricing-style-3">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>₹</sup>
                                                    69
                                                    <sub>/mo</sub>
                                                </h2>
                                                <span class="sub-texts">Advance</span>
                                            </div>
                                            <a href="pricing.html" class="gt-theme-btn">
                                                Get this plan
                                            </a>
                                            <ul class="gt-pricing-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    3 autopilot projects
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic keyword research
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Internal & external linking
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI SEO Recommendations
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Content scheduling
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic publishing
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI & Stock images
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    15% off backlinks
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 right_view">
                                        <div class="gt-pricing-box-items pricing-style-3">
                                            <div class="gradient-bg"></div>
                                            <div class="gt-pricing-header">
                                                <h2>
                                                    <sup>$</sup>
                                                    99
                                                    <sub>/mo</sub>
                                                </h2>
                                                <span class="sub-texts">diamond</span>
                                            </div>
                                            <a href="pricing.html" class="gt-theme-btn">
                                                Get this plan
                                            </a>
                                            <ul class="gt-pricing-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    3 autopilot projects
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic keyword research
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Internal & external linking
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI SEO Recommendations
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Content scheduling
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    Automatic publishing
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    AI & Stock images
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    15% off backlinks
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Testimonial Section Start -->
            <section class="gt-testimonial-section-3 fix pb-0 bg-cover section-padding"
                style="background-image: url('assets/img/home-3/testimonial/testimonial-bg.jpg');">
                <div class="container">
                    <div class="gt-section-title text-center style-3">
                        <h6 class="text-white wow fadeInUp tt-capitalize">Trusted by Management Committees</h6>
                        <h2 class="text-white char-animation">
                            What RWA Leaders Say
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="gt-flag-box left_view wow fadeInLeft">
                                <div class="info-content">
                                    <img src="assets/img/home-3/flag/client-info.png" alt="img">
                                    <p>
                                        500+ Societies <br>
                                        Digitized in India
                                    </p>
                                </div>
                                <a href="about.html" class="arrow-box">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="gt-flag-items right_view">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".1s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/01.png" alt="img">
                                            <div class="country-name">
                                                <h4>Delhi/NCR</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".2s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/02.png" alt="img">
                                            <div class="country-name">
                                                <h4>Mumbai</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".3s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/03.png" alt="img">
                                            <div class="country-name">
                                                <h4>Bangalore</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".4s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/04.png" alt="img">
                                            <div class="country-name">
                                                <h4>Pune</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".5s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/05.png" alt="img">
                                            <div class="country-name">
                                                <h4>Chennai</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 wow fadeInLeft"
                                        data-wow-delay=".6s">
                                        <div class="gt-flag-thumb">
                                            <img src="assets/img/home-3/flag/06.png" alt="img">
                                            <div class="country-name">
                                                <h4>Kolkata</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gt-testimonial-wrapper-3 section-padding pb-0">
                        <div class="shape4">
                            <img src="assets/img/new-add/shape-4.png" alt="img">
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="gt-testimonial-box-items-3">
                                    <h6>
                                        Sanjeev Khanna <span>Secretary, Apex Heights RWA</span>
                                    </h6>
                                    <p>
                                        RCS compliance used to be a nightmare for our committee. Propert-Ease automated
                                        our Section 79 filings and moved our entire governance portal to our own domain.
                                        The transparency has significantly reduced member grievances.
                                    </p>
                                    <div class="gt-client-info">
                                        <div class="quote-icon">
                                            <img src="assets/img/home-3/testimonial/quote.svg" alt="img">
                                        </div>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/testimonial/client-info.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="gt-testimonial-box-items-3">
                                    <h6>
                                        Anjali Deshmukh <span>President, Lotus CGHS</span>
                                    </h6>
                                    <p>
                                        Tracking the builder’s RERA defect liability was almost impossible with paper
                                        records. Propert-Ease's timeline tracker alerted us just in time to claim
                                        structural repairs. It’s an essential tool for every modern society board.
                                    </p>
                                    <div class="gt-client-info">
                                        <div class="quote-icon">
                                            <img src="assets/img/home-3/testimonial/quote.svg" alt="img">
                                        </div>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/testimonial/client-info.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt News Section Start -->
            <section class="gt-news-section-3 fix section-padding">
                <div class="container">
                    <div class="gt-section-title-area">
                        <div class="gt-section-title style-3">
                            <h6 class="wow fadeInUp tt-capitalize">Compliance Insights</h6>
                            <h2 class="char-animation">
                                Latest in Society Governance
                            </h2>
                        </div>
                        <a href="news.html" class="gt-theme-btn style-3 wow fadeInUp" data-wow-delay=".3s">view all
                            insights</a>
                    </div>
                    <div class="row advance-wrap">
                        <div class="col-xl-3 col-lg-4 col-md-6 advance-item">
                            <div class="gt-news-box-items-3">
                                <div class="gt-thumb">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-01.jpg"
                                        alt="img">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-01.jpg"
                                        alt="img">
                                </div>
                                <div class="gt-content">
                                    <ul>
                                        <li>Feb 05, 2026</li>
                                        <li>Seen 1.2k</li>
                                    </ul>
                                    <h4>
                                        <a href="news-details.html">The 2026 RCS Mandate: Why Every Society Needs a
                                            Digital Constitution</a>
                                    </h4>
                                    <span>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/info.png"
                                            alt="img">
                                        Propert-Ease Legal Team
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 advance-item">
                            <div class="gt-news-box-items-3">
                                <div class="gt-thumb">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-02.jpg"
                                        alt="img">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-02.jpg"
                                        alt="img">
                                </div>
                                <div class="gt-content">
                                    <ul>
                                        <li>Jan 20, 2026</li>
                                        <li>Seen 850</li>
                                    </ul>
                                    <h4>
                                        <a href="news-details.html">Understanding RERA Section 14: Tracking Builder
                                            Liability for 5 Years</a>
                                    </h4>
                                    <span>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/info.png"
                                            alt="img">
                                        Propert-Ease Compliance
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 advance-item">
                            <div class="gt-news-box-items-3">
                                <div class="gt-thumb">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-03.jpg"
                                        alt="img">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-03.jpg"
                                        alt="img">
                                </div>
                                <div class="gt-content">
                                    <ul>
                                        <li>Jan 12, 2026</li>
                                        <li>Seen 2.1k</li>
                                    </ul>
                                    <h4>
                                        <a href="news-details.html">How Transparent Digital Audits Can Reduce Society
                                            Member Grievances</a>
                                    </h4>
                                    <span>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/info.png"
                                            alt="img">
                                        Governance Expert
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 advance-item">
                            <div class="gt-news-box-items-3">
                                <div class="gt-thumb">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-04.jpg"
                                        alt="img">
                                    <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/news-04.jpg"
                                        alt="img">
                                </div>
                                <div class="gt-content">
                                    <ul>
                                        <li>Dec 28, 2025</li>
                                        <li>Seen 940</li>
                                    </ul>
                                    <h4>
                                        <a href="news-details.html">White-Labeling Your Society: The Power of a Custom
                                            .site Domain</a>
                                    </h4>
                                    <span>
                                        <img src="https://ex-coders.com/html/boostly/assets/img/home-3/news/info.png"
                                            alt="img">
                                        Tech Onboarding
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gt Footer Section Start -->
            <?php
            require_once('./assets/includes/elements/footer.php');
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
    <!--<< SweetAlert2 >>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--<< Main.js >>-->
    <script src="<?= get_site_option('site_url') . 'assets/js/main.js' ?>"></script>
    <!--<< Propert-Ease RAG Chatbot >>-->
    <script>
        window.PROPERTEASE_OPENROUTER_KEY = "<?= getenv('OPENROUTER_API_KEY') ?: '' ?>";
    </script>
    <?php if (file_exists(__DIR__ . '/assets/js/config.js')): ?>
        <script src="<?= get_site_option('site_url') . 'assets/js/config.js' ?>"></script>
    <?php endif; ?>
    <script src="<?= get_site_option('site_url') . 'assets/js/chatbot.js' ?>"></script>
</body>

</html>
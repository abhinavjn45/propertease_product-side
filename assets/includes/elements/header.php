<header id="header-sticky" class="header-3">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="<?= get_site_option('site_url') ?>" class="header-logo">
                        <img src="<?= get_site_option('site_url') . 'assets/img/logo/' . get_site_option('site_logo') ?>" alt="Propert-Ease Logo" style="width: 100%;">
                    </a>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'class="active"'; } ?>>
                                    <a href="<?= get_site_option('site_url') ?>" class="border-none">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= get_site_option('site_url') . 'about/' ?>">About Us</a>
                                </li>
                                <!-- <li>
                                    <a href="<?= get_site_option('site_url') . 'services/' ?>">
                                        Services
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="service.html">Our service</a></li>
                                        <li><a href="service-details.html">service Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-dropdown">
                                    <a href="news-details.html">
                                        Pages
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown">
                                            <a href="team-details.html">
                                                Our Team
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="project-details.html">
                                                Case studies
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="project.html">Case studies</a></li>
                                                <li><a href="project-details.html">Case studies Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                        <li><a href="faq.html">Our Faq</a></li>
                                        <li><a href="sign-in.html">sign in</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="news-details.html">
                                        Blog
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="news-grid.html">Blog Grid</a></li>
                                        <li><a href="news.html">Blog Standard</a></li>
                                        <li><a href="news-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="<?= get_site_option('site_url') . 'contact/' ?>">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="header-button">
                        <a href="<?= get_site_option('site_url') . 'user-auth/login/' ?>" class="gt-theme-btn gt-theme-btn style-3 bg-border">Login</a>
                        <a href="<?= get_site_option('site_url') . 'get-started/' ?>" class="gt-theme-btn gt-theme-btn style-3 bg-theme">Get Started</a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <div class="header-bar">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
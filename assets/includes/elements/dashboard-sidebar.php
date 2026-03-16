<?php
// dashboard-sidebar.php - Vertical navigation for the admin dashboard
$current_page = basename($_SERVER['PHP_SELF']);
$site_url = get_site_option('site_url');
?>

<aside class="dash-sidebar" id="dashSidebar">
    <div class="dash-sidebar-logo">
        <a href="<?= $site_url ?>">
            <img src="<?= $site_url . 'assets/img/logo/logo.png' ?>" alt="Propert-Ease Logo" onerror="this.src='<?= $site_url ?>assets/img/logo/favicon.png';">
            <span style="font-weight: 800; font-size: 20px; color: var(--dash-primary);">Propert-Ease</span>
        </a>
    </div>

    <div class="dash-sidebar-menu">
        <div class="dash-menu-label">Main Menu</div>
        <ul class="dash-menu-list">
            <li class="dash-menu-item">
                <a href="<?= $site_url ?>dashboard/" class="dash-menu-link <?= $current_page == 'index.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-house"></i>
                    <span>Overview</span>
                </a>
            </li>
            <li class="dash-menu-item">
                <a href="javascript:void(0)" class="dash-menu-link">
                    <i class="fa-solid fa-building-user"></i>
                    <span>My Society</span>
                </a>
            </li>
            <li class="dash-menu-item">
                <a href="javascript:void(0)" class="dash-menu-link">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Billings</span>
                </a>
            </li>
        </ul>

        <div class="dash-menu-label">Account</div>
        <ul class="dash-menu-list">
            <li class="dash-menu-item">
                <a href="javascript:void(0)" class="dash-menu-link">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Profile Settings</span>
                </a>
            </li>
            <li class="dash-menu-item">
                <a href="javascript:void(0)" class="dash-menu-link">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Security</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="dash-sidebar-footer">
        <a href="<?= $site_url ?>logout/" class="dash-menu-link" style="color: #ef4444;">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

<div class="dash-overlay" id="dashOverlay"></div>

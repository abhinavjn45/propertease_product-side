<?php
    // dashboard-header.php - Top navigation bar for the admin dashboard
    $user_id = $_SESSION['user_unique_id'] ?? '';
    $user = [];
    if ($user_id) {
        require_once __DIR__ . '/../functions/database_functions/db-user-registration.php';
        $user = get_user_by_unique_id($user_id);
    }

    $user_name = $user['user_fullname'] ?? 'User';
    $user_role = ucwords(str_replace('_', ' ', $user['user_role'] ?? 'Member'));
    $initials = strtoupper(substr($user_name, 0, 1));
?>

<header class="dash-header">
    <div class="header-left">
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <span class="dash-page-title" style="margin-bottom: 0; font-size: 20px;">
            Overview
        </span>
    </div>

    <div class="header-right">
        <!-- Search Bar Placeholder -->
        <div class="header-search d-none d-md-block">
            <div style="position: relative;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--dash-text-muted);"></i>
                <input type="text" placeholder="Search..." style="padding: 8px 12px 8px 36px; border: 1px solid var(--dash-border); border-radius: 50px; font-size: 14px; background: var(--dash-bg);">
            </div>
        </div>

        <!-- System Notifications -->
        <div class="header-icon" style="position: relative; cursor: pointer;">
            <i class="fa-regular fa-bell" style="font-size: 20px; color: var(--dash-text-muted);"></i>
            <span style="position: absolute; top: -5px; right: -5px; background: #ef4444; width: 8px; height: 8px; border-radius: 50%; border: 2px solid white;"></span>
        </div>

        <!-- User Profile Dropdown -->
        <div class="user-dropdown" id="userDropdown">
            <div class="user-info d-none d-sm-block">
                <span class="user-name"><?= $user_name ?></span>
                <span class="user-role"><?= $user_role ?></span>
            </div>
            <div class="user-avatar">
                <?= $initials ?>
            </div>
        </div>
    </div>
</header>

<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="<?= $dashboard_url ?>" class="sidebar-logo">
            <img src="<?= $dashboard_url ?>assets/images/logo.png" alt="site logo" class="light-logo">
            <img src="<?= $dashboard_url ?>assets/images/logo-light.png" alt="site logo" class="dark-logo">
            <img src="<?= $dashboard_url ?>assets/images/favicon.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="<?= $dashboard_url ?>">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-menu-group-title">Application</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:buildings-outline" class="menu-icon"></iconify-icon>
                    <span>Societies</span> 
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?= $dashboard_url ?>?type=societies&page=manage-societies">
                            <i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> 
                            All Societies
                        </a>
                    </li>
                    <li>
                        <a href="<?= $dashboard_url ?>?type=societies&page=add-society">
                            <i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> 
                            Add Society
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
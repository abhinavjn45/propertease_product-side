<div class="fix-area">
    <div class="offcanvas__info style-3">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?= get_site_option('site_url') ?>">
                            <img src="<?= get_site_option('site_url') . 'assets/img/logo/' . get_site_option('site_logo') ?>" alt="Propert-Ease Logo">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    <?= get_site_option('site_offcanvas_description') ?>
                </p>
                <div class="mobile-menu style-2 fix mb-3"></div>
                <div class="offcanvas__contact pt-5">
                    <a href="<?= get_site_option('site_url') . 'get-started/' ?>" class="gt-theme-btn">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
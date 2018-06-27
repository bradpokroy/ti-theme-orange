<ul id="nav-tabs" class="nav-menus nav nav-tabs">
    <a
        class="nav-item nav-link <?= ($activeTab === 'menus') ? 'active' : ''; ?>"
        href="<?= restaurant_url('local/menus'); ?>"
    ><?= lang('main::default.local.text_tab_menu'); ?></a>
    <?php if (setting('allow_reviews', 1)) { ?>
        <a
            class="nav-item nav-link <?= ($activeTab === 'reviews') ? 'active' : ''; ?>"
            href="<?= restaurant_url('local/reviews'); ?>"
        ><?= lang('main::default.local.text_tab_review'); ?></a>
    <?php } ?>
    <a
        class="nav-item nav-link <?= ($activeTab === 'info') ? 'active' : ''; ?>"
        href="<?= restaurant_url('local/info'); ?>"
    ><?= lang('main::default.local.text_tab_info'); ?></a>
    <?php if ($currentLocation->hasGallery()) { ?>
        <a
            class="nav-item nav-link <?= ($activeTab === 'gallery') ? 'active' : ''; ?>"
            href="<?= restaurant_url('local/gallery'); ?>"
        ><?= lang('main::default.local.text_tab_gallery'); ?></a>
    <?php } ?>
</ul>
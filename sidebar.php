<aside class="l-sidebar p-sidebar is-sidebar">
    <h2 class="p-sidebar__title c-title">Menu</h2>
    <div class="c-close p-sidebar__button is-close">
        <span class="c-close__right"></span>
        <span class="c-close__left"></span>
    </div>
    <div class="p-sidebar__list c-text__m">
        <div class="p-side-menu">
            <?php wp_nav_menu(array('theme_location' => 'category_nav')); ?>
        </div>
    </div>
</aside>
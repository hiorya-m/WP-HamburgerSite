<?php get_header(); ?>
<!-- メインメニュー -->
        <main class=" l-main">
            <article class="p-articre">
                <!-- ページトップ -->
                <div class="p-archive-top">
                    <img class="p-archive-top__image" src="<?php echo get_theme_file_uri();?>/img/archive/pagetop.png">
                    <div class="p-archive-top__heading">
                        <h2 class="p-archive-top__heading__title c-title">Search:</h2>
                        <p class="p-archive-top__heading__lead c-text__m"><?php echo get_search_query(); ?></p>
                    </div>
                </div>
                <!-- カード読み込み -->
                <?php get_template_part('template/archive-card'); ?>
            </article>
            <!-- メインここまで -->
        </main>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        <!-- フッター -->
<?php get_footer(); ?>
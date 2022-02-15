<?php get_header(); ?>
<!-- メインメニュー -->
        <main class=" l-main">
            <article class="p-articre">
                <!-- ページトップ -->
                <div class="p-page-top">
                    <img class="p-page-top__image" src="<?php echo get_theme_file_uri('/img/single/pagetop.png');?>">
                    <h1 class="p-page-top__title"><?php echo get_the_title(); ?></h1>
                </div>
                <?php the_content(); ?>
            </article>
            <!-- メインここまで -->
        </main>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        <!-- フッター -->
<?php get_footer(); ?>
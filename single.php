<?php get_header(); ?>
<!-- メインメニュー -->
        <main class=" l-main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="p-articre">
                <!-- ページトップ -->
                <?php if(has_post_thumbnail()): ?>
                    <div class="p-page-top">
                        <img class="p-page-top__image" src="<?php the_post_thumbnail_url('full'); ?>">
                        <h1 class="p-page-top__title"><?php the_title(); ?></h1>
                </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </article>
            <?php endwhile; endif; ?>
            <!-- メインここまで -->
        </main>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        <!-- フッター -->
<?php get_footer(); ?>
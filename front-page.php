<?php get_header(); ?>
<!-- メインメニュー -->
<main class=" l-main">

        <!-- ページトップ -->
        <?php if (get_header_image()) : ?>
            <div class="p-page-top">
                <img class="p-page-top__image" src="<?php header_image(); ?>">
                <h2 class="p-page-top__title"><?php echo get_the_title(); ?></h2>
            </div>
        <?php endif; ?>
        <!-- メニュー表示 -->
        <div class="p-home-product">
            <ul class="p-home-product__inner">
                <li class="p-home-product__inner--item">
                    <a href="<?php echo esc_url(home_url('/category/takeout')) ?>">
                        <div class="p-home-menu">
                            <h2 class="c-title p-home-menu__title">Take Out</h2>
                            <!-- 最新の投稿を2件表示したい -->
                            <div class="p-home-menu__body">
                                <?php
                                $information = get_posts(array(
                                    //ここで取得条件を指定する
                                    'posts_per_page' => 2,
                                    'category' => 14
                                ));
                                if ($information) :
                                ?>
                                    <?php
                                    foreach ($information as $post) : //ループ開始
                                        setup_postdata($post); //記事取得
                                    ?>
                                        <dl class="p-home-description">
                                            <a href="<?php the_permalink(); ?>">
                                                <dt class="p-home-description__title"><?php the_title(); ?></dt>
                                                <dd class="p-home-description__text"><?php the_excerpt(); ?></dd>
                                            </a>
                                        </dl>
                                    <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                <?php else : ?>
                                    <p>表示できる情報はありません。</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="p-home-product__inner--item">
                    <div class="p-home-menu">
                            <a href="<?php echo esc_url(home_url('/category/eatin')) ?>">
                            <h2 class="c-title p-home-menu__title">Eat In</h2>
                            <!-- 最新の投稿を2件表示したい-->
                            <div class="p-home-menu__body">
                                <?php
                                $information = get_posts(array(
                                    //ここで取得条件を指定する
                                    'posts_per_page' => 2,
                                    'category' => 15
                                ));
                                if ($information) :
                                ?>
                                    <?php
                                    foreach ($information as $post) :
                                        setup_postdata($post);
                                    ?>
                                        <dl class="p-home-description">
                                            <a href="<?php the_permalink(); ?>">
                                                <dt class="p-home-description__title"><?php the_title(); ?></dt>
                                                <dd class="p-home-description__text"><?php the_excerpt(); ?></dd>
                                            </a>
                                        </dl>
                                    <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                <?php else : ?>
                                    <p>表示できる情報はありません。</p>
                                <?php endif; ?>
                            </div>
                        </a>
                        </div>
                </li>
            </ul>
        </div>
        <!-- アクセスマップ -->
        <section class="p-acsess c-map">
            <!-- 投稿画面から編集できるようにしたい -->
            <div class="p-acsess__body">
                <h2 class="p-acsess__body__title">見出しが入ります</h2>
                <p class="p-acsess__body__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま
                </p>
            </div>
        </section>

    <!-- メインここまで -->
</main>
<!-- サイドバー -->
<?php get_sidebar(); ?>
<!-- フッター -->
<?php get_footer(); ?>
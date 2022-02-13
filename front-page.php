<?php get_header(); ?>
<!-- メインメニュー -->
<main class=" l-main">
    <article class="p-articre">
        <!-- ページトップ -->
        <div class="p-page-top">
            <img class="p-page-top__image--ps" src="<?php echo get_theme_file_uri('/img/index/pagetop-sp.png'); ?>">
            <img class="p-page-top__image--tab" src="<?php echo get_theme_file_uri('/img/index/pagetop.png'); ?>">
            <h2 class="p-page-top__title"><?php echo get_the_title(); ?></h2>
        </div>
        <!-- メニュー表示 -->
        <div class="p-home-product">
            <ul class="p-home-product__inner">
                <li class="p-home-product__inner--item">
                    <a href="<?php echo esc_url(home_url('/category/takeout')) ?>">
                        <div class="p-home-menu">
                            <h2 class="c-title p-home-menu__title">Take Out</h2>
                            <!-- 最新の投稿を2件表示したい -->
                            <div class="p-home-menu__body">
                                <dl class="p-home-description">
                                    <dt class="p-home-description__title">Take OUT</dt>
                                    <dd class="p-home-description__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                                <dl class="p-home-description">
                                    <dt class="p-home-description__title">Take OUT</dt>
                                    <dd class="p-home-description__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="p-home-product__inner--item">
                    <a href="<?php echo esc_url(home_url('/category/eatin')) ?>">
                        <div class="p-home-menu">
                            <h2 class="c-title p-home-menu__title">Eat In</h2>
                            <!-- 最新の投稿を2件表示したい-->
                            <div class="p-home-menu__body">
                                <dl class="p-home-description">
                                    <dt class="p-home-description__title">Eat In</dt>
                                    <dd class="p-home-description__text">当店のイートインで利用できる商品を掲載しています</dd>
                                </dl>
                                <dl class="p-home-description">
                                    <dt class="p-home-description__title">Eat In</dt>
                                    <dd class="p-home-description__text">当店のイートインで利用できる商品を掲載しています</dd>
                                </dl>
                            </div>
                        </div>
                    </a>
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
    </article>
    <!-- メインここまで -->
</main>
<!-- サイドバー -->
<?php get_sidebar(); ?>
<!-- フッター -->
<?php get_footer(); ?>
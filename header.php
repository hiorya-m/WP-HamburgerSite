<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_enqueue_script('jquery'); ?> <!-- headより先に読み込み -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- グリッドレイアウト -->
    <div class="l-container">
        <!-- ヘッダー -->
        <header class="l-header">
            <div class="p-header">
                <h1 class="c-title p-header__logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
                <!-- サーチフォーム -->
                <div class="p-header__form">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <!-- サイドバー展開用 -->
            <button class="p-sidebar-open c-title is-open">Menu</button>
        </header>

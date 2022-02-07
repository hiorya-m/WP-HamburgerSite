<?php
// テーマサポート
add_theme_support( 'title-tag');

// タイトル出力
function hamburger_title($title) {
    if (is_front_page() && is_home() ) {
        $title = get_bloginfo( 'name', 'display');
    } elseif (is_singular() ) {
        $title = single_post_title( '', false);
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title');

// CSSとスクリプト読み込み
function hamburger_script() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/CSS/style.css');
    wp_enqueue_style( 'mplus1m','http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css');
    wp_enqueue_style( 'googlefonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    wp_enqueue_script('script', get_template_directory_uri().'/JS/script.js');
}
add_action('wp_enqueue_scripts', 'hamburger_script');

?>
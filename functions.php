<?php
// テーマサポート
add_theme_support( 'menus');
add_theme_support( 'title-tag'); /*タイトルタグがheadに追加される*/

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
    // wp_enqueue_style( 'style', get_template_directory_uri().'/CSS/style.css');旧バージョンの読み込み
    wp_enqueue_style( 'style', get_theme_file_uri('/CSS/style.css'),false);
    wp_enqueue_style( 'mplus1m','http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css');
    wp_enqueue_style( 'googlefonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    // wp_enqueue_script('script', get_template_directory_uri().'/JS/script.js');旧バージョンの読み込み
    wp_enqueue_script('script', get_theme_file_uri('/JS/script.js'),array(),false,true);
}
add_action('wp_enqueue_scripts', 'hamburger_script');

//ウィジェットでサイドバー作成してみたが失敗
// function hamburger_widgets_init() {
//     register_sidebar (
//         array(
//             'name' => 'バーガー',
//             'id' => 'burger_widget',
//             'discription' => 'バーガー用ウィジェット',
//             'before_widgets' => '<div id="%1$s" class="widgets %2$s">',
//             'after_widgets' => '</div>',
//             'before_title' => '<h3>',
//             'after_title' => "</h3>\n",
//         )
//     );
// }
// add_action('widgets_init', 'hamburger_widgets_init');

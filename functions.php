<?php
// 機能有効化関数
function custom_theme_support()
{
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation', 'rtbread'),
        'category_nav' => esc_html__('category navigation', 'rtbread'),
    ));
}
add_action('after_setup_theme', 'custom_theme_support');

// CSSとスクリプト読み込み
function hamburger_script()
{
    wp_enqueue_style('mplus1m', 'http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css',array(),'');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap',array(),'');
    wp_enqueue_style('style', get_theme_file_uri('/CSS/style.css'), array(),date("YmdHi"));//dateで再キャッシュ用（バージョン情報を後で記述）

    wp_enqueue_script('script', get_theme_file_uri('/JS/script.js'), array(),date("YmdHi"), true);//dateで再キャッシュ用（バージョン情報を後で記述）
}
add_action('wp_enqueue_scripts', 'hamburger_script');

// タイトルタグ出力関数
function hamburger_title($title)
{
    if (is_front_page() && is_home()) {
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) {
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

// クエリ設定関数
function custom_main_query($query)
{
    // 管理画面とメインクエリを除く
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_category()) {
        // カテゴリーページは投稿3件取得
        $query->set('posts_per_page', 3);
    }
    if ($query->is_search()) {
        // 検索ページは投稿5件取得
        $query->set('posts_per_page', 5);
        // 投稿のみ検索にする
        $query->set('post_type', 'post');
        // 全角スペースを半角にする
        $formtxt = $query->get('s');
        $formtxt = str_replace('　', ' ', $formtxt);
        $query->set('s', $formtxt);
    }
}
add_action('pre_get_posts', 'custom_main_query');

<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');

  if(is_home() || is_front_page()) {
    wp_enqueue_style('top', get_theme_file_uri('css/top.css'), array('ress', 'style'), false, 'all');

  } elseif(is_category()) {
    wp_enqueue_style('category', get_theme_file_uri('css/category.css'), array('ress', 'style'), false, 'all');
  }
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
アイキャッチを有効化
**************************************************/
add_theme_support('post-thumbnails');

// メニューを表示
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}


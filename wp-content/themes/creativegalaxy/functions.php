<?php

function my_setup_theme()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','my_setup_theme');
// add_action('WPの関数名', '自分の関数');


function my_wp_head()
{
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Open+Sans:wght@400;700&family=Oswald&display=swap"
    rel="stylesheet">';
}
add_action('wp_head', 'my_wp_head',5);


function my_enqueue_scripts()
{
  wp_enqueue_style('remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');//<link rel="stylesheet" media="all">

  if( is_front_page() ){
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/vendors/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/js/vendors/slick/slick-theme.css');
  }

  wp_enqueue_style('galaxy', get_template_directory_uri() . '/assets/css/style.min.css');

  // jQuery（WordPress版）を使用しない
  // wp_deregister_script('jquery');
  wp_enqueue_script('jquery');

  if( is_front_page() ){
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendors/slick/slick.min.js',[], false, true);
  }

  wp_enqueue_script('galaxy', get_template_directory_uri() . '/assets/js/script.js', [], false, true);

}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


function my_pagenavi_class_pages($class) {
  return 'my_pagenavi_class'; //ページネーションのdivのクラス名
}
add_filter('wp_pagenavi_class_page', 'my_pagenavi_class_pages');
<?php

function my_setup_theme()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('editor-styles');
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


function my_add_editor_style()
{
  add_editor_style('assets/css/editor-style.min.css');
}
add_action('admin_init', 'my_add_editor_style');


// カスタム投稿タイプアーカイブページ（作品一覧ページ）
// カスタムタクソノミーアーカイブページ（例. Web Designカテゴリページ）
add_action('pre_get_posts', 'my_works_post_num');
function my_works_post_num( $query )
{
  // カスタム投稿タイプ(works)一覧ページ用（6件/ページ）
  if( $query->is_main_query() && is_post_type_archive('works') && !is_admin() ) {
    $query->set('posts_per_page', 6);
  }

  // カスタムタクソノミー(workscat)一覧ページ用（6件/ページ）
  if( $query->is_main_query() && is_tax('workscat') && !is_admin() ) {
    $query->set('posts_per_page', 6);
  }
}
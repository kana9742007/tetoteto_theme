<?php

/*
 * 定数定義ファイルを読み込む
 */
// require_once TEMPLATEPATH . "/functions/define.php";

/*
 * functionsフォルダにあるファイルをすべて読み込む
*/
// foreach (glob(TEMPLATEPATH . "/functions/*/*.php") as $file) {
//   require_once $file;
// }

function enqueue_styles()
{
  // サイト内のCSSの読み込み
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style/css/style.css');
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/tetoteto-main/assets/slick/slick.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts()
{
  // サイト内のjs読み込み
  // Jquery
  wp_enqueue_script('jquery-js', get_template_directory_uri() . '/tetoteto-main/assets/js/jquery-3.3.1.min.js', array(), '1.0.0', false);
  // slick
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/tetoteto-main/assets/slick/slick.min.js', array(), '1.0.0', false);
  // layout
  wp_enqueue_script('layout-js', get_template_directory_uri() . '/tetoteto-main/assets/js/layout.js?ver210610', array(), '1.0.0', false);

  // search
  wp_enqueue_script('search-box', get_template_directory_uri() . '/tetoteto-main/assets/js/search-box.js', array(), '1.0.0', false);
}


add_action('wp_enqueue_scripts', 'enqueue_scripts');

// サムネイル表示
add_theme_support( 'post-thumbnails' );

// 出力画像サイズ追加
add_image_size('small', 440, 9999);
add_image_size('ogp', 1200, 9999);

// 記事のHTML自動整形機能を無効化する
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする

// 事例一覧パラメータ
function my_query_vars($vars)
{
  $vars[] = 'case_cat';
  $vars[] = 'case_type';
  return $vars;
}
add_filter('query_vars', 'my_query_vars');

<?php

/*
 * 定数定義ファイルを読み込む
 */
// require_once TEMPLATEPATH . "/functions/define.php";

// サムネイル表示
add_theme_support( 'post-thumbnails' );

// 出力画像サイズ追加
add_image_size('small', 440, 9999);
add_image_size('ogp', 1200, 9999);

// 記事のHTML自動整形機能を無効化する
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする

// REST APIからのデータ読み込みを許可
function add_allow_header( $headers ) {
  global $wp;
  if (preg_match ('/wp-json/',$wp->request)) {
    $headers['Access-Control-Allow-Origin'] = 'https://tetoteto.info';
    $headers['Access-Control-Allow-Credentials'] = 'true';
    return $headers;
  }
}
add_filter( 'wp_headers', 'add_allow_header' );

function create_post_type() {
  $customPostSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル,
    /*'custom-fields', //カスタムフィールド*/
    'thumbnail',  // アイキャッチ画像*/
  ];
  //カスタム投稿タイプ１（ここから）
  register_post_type(
    'case',  // カスタム投稿名
    array(
      'labels' => array(
        'name' => __( '事例' ), // 管理画面の左メニューに表示されるテキスト
        'singular_name' => __( 'case' ),
        'rewrite' => array('slug' => 'case-post'),
        'rewrite' => array( 'with_front' => false ),
      ),
      'public' => true,
      'menu_position' => 5,  // 「5」で「投稿」の下に配置
      'has_archive' => true,
      'supports' => $customPostSupports
    )
  );
  register_post_type(
    'member',  // カスタム投稿名
    array(
      'labels' => array(
        'name' => __( 'メンバー' ),
        'singular_name' => __( 'member' ),
        'rewrite' => array('slug' => 'member-post'),
        'rewrite' => array( 'with_front' => false ),
      ),
      'public' => true,
      'menu_position' => 6,
      'has_archive' => true,
      'supports' => $customPostSupports
    )
  );
  register_taxonomy(
    'birth-place', //タグ名（任意）
    'post', //カスタム投稿名
    array(
      'hierarchical' => true, //タグタイプの指定（階層をもつかどうか？）
      //ダッシュボードに表示させる名前
      'label' => '出身地',
      'public' => true,
      'show_ui' => true,
      'rewrite' => true,
    )
  );
  register_taxonomy(
    'case_cat', //タグ名（任意）
    'case', //カスタム投稿名
    array(
      'hierarchical' => true, //タグタイプの指定（階層をもつかどうか？）
      //ダッシュボードに表示させる名前
      'label' => '事例のカテゴリ',
      'public' => true,
      'show_ui' => true,
      'rewrite' => true,
    )
  );
  register_taxonomy(
    'case_type', //タグ名（任意）
    'case', //カスタム投稿名
    array(
      'hierarchical' => true, //タグタイプの指定（階層をもつかどうか？）
      //ダッシュボードに表示させる名前
      'label' => '事例のジャンル',
      'public' => true,
      'show_ui' => true,
      'rewrite' => true,
    )
  );
}

add_action( 'init', 'create_post_type' );

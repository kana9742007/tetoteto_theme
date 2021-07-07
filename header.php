<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
  <?php
  if ( is_home() || is_front_page() ) {
    $site_title = 'TETOTETO Inc. | 暮らしの感度を高めるクリエイティブプロダクション';
    $site_permalink = home_url( '/' );
    $thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
    $description = "沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。";
  }else if( is_404()){
    $site_title = 'ページがみつかりませんでした。';
    $site_permalink = get_the_permalink();
    $thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
    $description = "沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。";
  } else if( is_category() || is_archive() ){
    $page_title = single_cat_title("", false).' | TETOTETO Inc.';
    $site_title = single_cat_title("", false).' | TETOTETO Inc.';
    $thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
    $site_permalink = get_the_permalink();
    $description = single_cat_title("", false).'に関する作品一覧';
  } else if( is_single() || is_page() ) {
    $site_title = get_the_title($post->ID).' | TETOTETO Inc.';
    $site_permalink = get_the_permalink($post->ID);
    $thumnail = get_the_post_thumbnail_url( $post->ID, 'large' );
    $description = strip_tags(SCF::get( 'case_detail', $post->ID ));
  }else{
    $page_title = 'TETOTETO Inc. | 暮らしの感度を高めるクリエイティブプロダクション';
    $site_title = 'TETOTETO Inc. | 暮らしの感度を高めるクリエイティブプロダクション';
    $site_permalink = get_the_permalink();
    $description = "沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。";
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    $site_image_attach = wp_get_attachment_image_src( $thumbnail_id, 'large' );
    if (!empty($site_image_attach)) {
      $site_image = $site_image_attach[0];
    }
  }

    if (empty($description)) {
      $description = "エイブルアート・カンパニーは、障害のある人のアートを、デザインを通して社会に発信する組織です。カンパニーアーティストの作品も公開しています。";
    }
    $site_image = "";

  ?>
  <title><?php echo $site_title; ?></title>
	<meta property="og:title" content="<?php echo $site_title; ?>">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo $site_permalink; ?>">
	<meta property="og:image" content="<?php echo $thumnail; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo $site_title; ?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:site_name" content="Able Art Company">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:title" content="<?php echo $site_title; ?>">
	<meta name="twitter:image" content="<?php echo $thumnail; ?>">
	<link href="<?php echo get_template_directory_uri();?>/assets/img/icon/icon.png" rel="apple-touch-icon" sizes="180x180">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/icon/icon.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://webfont.fontplus.jp/accessor/script/fontplus.js?QQ69TeiJCsk%3D&box=dFsrremOrPA%3D&aa=1&ab=2" charset="utf-8"></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('parts/header'); ?>

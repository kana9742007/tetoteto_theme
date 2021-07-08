<!-- 関連記事 -->
<?php

// TODO カテゴリー絞り込み
$cat_slug = 'produce';
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$type = get_query_var('case_type') ?? null;
$cat = get_query_var('case_cat') ?? null;

if ($type) :
  $getType =  array(
    'taxonomy' => 'case_type',
    'field' => 'slug',
    'terms' => $type,
  );
endif;
if ($cat) :
  $getCat =  array(
    'taxonomy' => 'case_cat',
    'field' => 'slug',
    'terms' => $cat,
  );
endif;
$activeTerm = array(
  'relation' => 'AND',
  $getType,
  $getCat,
);
$posts = array(
  'posts_per_page' => 16,
  'orderby' => 'DISC',
  'post_type' => 'case',
  'post_status' => 'publish',
  'paged' => $paged,
  'tax_query' => $activeTerm,
);

$the_query = new WP_Query($posts);
if ($the_query->have_posts()) :
?>

  <div class="comp-project-list detail is-list-page">
    <?php if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
        global $post_id;
        global $cat;
        global $title;
        global $thumbnails;
        global $cat_name;
        global $thumbnail;
        $post_id = get_the_ID();
        $cat = get_the_terms($post_id, 'case_cat');
        $title = get_the_title();
        $sp_thumbnails_id = SCF::get('sp_thumbnail');
        $thumbnails = wp_get_attachment_image_src($sp_thumbnails_id, 'thumbnail');
        $thumbnail = $thumbnails[0];
        $cat_name = $cat[0]->name;
    ?>
        <?php get_template_part('parts/case/projectItem', null); ?>
    <?php
      endwhile;
    else :
    endif;
    wp_reset_postdata();
    ?>
  </div><!-- comp-project-list -->
<?php
endif;
?>

<!-- ページネーション  -->
<?php
if (function_exists('wp_pagenavi')) :
?>
  <div class="projects-navigation">
    <?php
    wp_pagenavi(array('query' => $the_query));
    ?>
  </div>
<?php
endif;
?>

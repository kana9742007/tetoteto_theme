<!-- 関連記事 -->
<?php

// TODO カテゴリー絞り込み
$cat_slug = 'produce';

$posts = array(
  'posts_per_page' => -1,
  'orderby' => 'DISC',
  'post_type' => 'case',
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'case_cat',
      'field' => 'slug',
      'terms' => $cat_slug,
    ),
  ),
);

$the_query = new WP_Query($posts);
if ($the_query->have_posts()) :
?>

  <div class="comp-project-list detail">
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
        $thumbnails = wp_get_attachment_image_src($sp_thumbnails_id);
        $thumbnail = $thumbnails[0];
        $cat_name = $cat[0]->name;
    ?>
        <?php get_template_part('parts/case/projectItem', null); ?>
    <?php
      endwhile;
    else :
    endif;
    ?>
  </div><!-- comp-project-list -->
<?php
endif;
?>
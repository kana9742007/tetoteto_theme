<!-- 関連記事 -->
<?php
$args = wp_parse_args(
  $args,
  array(
    'cat_slug' => '',
    'post_id' => '',
  )
);

$posts = array(
  'post__not_in' => array($args['post_id']),
  'posts_per_page' => 4,
  'orderby' => 'rand',
  'post_type' => 'case',
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'case_cat',
      'field' => 'slug',
      'terms' => $args['cat_slug'],
    ),
  ),
);

$the_query = new WP_Query($posts);
if ($the_query->have_posts()) :
?>

  <section class="section-relation">
    <div class="section_inner">
      <div class="comp-section-title">
        <span class="title_en">OTHER PROJECT</span>
        <h2 class="title_ja"><span>その他のプロジェクト</span>をみる</h2>
      </div>
      <div class="comp-project-list detail">
        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
            global $post_id;
            global $cat;
            global $title;
            global $thumbnail;
            global $cat_name;
            $post_id = get_the_ID();
            $cat = get_the_terms($post_id, 'case_cat');
            $title = get_the_title();
            $thumbnails = get_the_post_thumbnail_url();
            $sp_thumbnails_id = SCF::get('sp_thumbnail');
            $sp_thumbnails = wp_get_attachment_image_src($sp_thumbnails_id);
            $thumbnail = $sp_thumbnails[0];
            $cat_name = $cat[0]->name;
        ?>
          <?php get_template_part('parts/case/projectItem', null); ?>
        <?php
          endwhile;
        else :
        endif;
        ?>
      </div><!-- comp-project-list -->
    </div><!-- section_inner -->
  </section>
<?php
endif;
?>

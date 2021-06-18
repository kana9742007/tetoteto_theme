<!-- 関連記事 -->
<?php
$posts = array(
  'posts_per_page' => -1,
  'orderby' => 'meta_value',
  'order' => 'ASC',
  'meta_key' => 'order_key',
  'post_type' => 'member',
  'post_status' => 'publish',
);

$the_query = new WP_Query($posts);
?>

<?php if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post();
  $post_id = get_the_ID();
  $member = array('id' => $post_id);

  get_template_part('parts/member/memberItem', null, $member);

  endwhile;
else :
endif;
?>
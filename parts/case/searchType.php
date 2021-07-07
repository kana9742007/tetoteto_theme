<?php
$term = get_query_var('case_type') ?? null;
$args = wp_parse_args(
  $args,
  array(
    'slug' => '',
  )
);
$uri = esc_url(home_url('/case'));
?>



  <?php
  // カテゴリーを取得
  $cat = array(
    'taxonomy' => 'case_type',
  );
  $types = get_categories($cat);

  foreach ($types as $type) : // 取得したカテゴリの配列でループを回す
    $nowTerm = $type->slug == $term;
    $isFood = $type->slug == 'food';
    if ($args['slug']) :
      $nowTerm = $type->slug == $args['slug'][0]->name;
    endif;
  ?>
    <a href="<?= $uri ?>?case_type=<?= $type->slug ?>" class="<?php echo $isFood ? 'food' : '' ?> <?php echo $nowTerm ? 'active' : '' ?> case-type"><?php echo $type->name; ?></a>
  <?php
  endforeach; // カテゴリのループ終わり
  ?>

<?php
$term = get_query_var('case_cat') ?? null;
$args = wp_parse_args(
  $args,
  array(
    'slug' => '',
  )
);
$uri = esc_url(home_url('/case'));

$nowProduce = 'produce' == $term;
$nowMyProject = 'my_project' == $term;
?>

  <a href="<?= $uri ?>?case_cat=produce" class="<?php echo $nowProduce ? 'active' : '' ?> case-cat">PRODUCE<span class="ja-text">プロデュース</span></a>
  <a href="<?= $uri ?>?case_cat=my_project " class="<?php echo $nowMyProject ? 'active' : '' ?> case-cat">MY PROJECT<span class="ja-text">マイプロジェクト</span></a>

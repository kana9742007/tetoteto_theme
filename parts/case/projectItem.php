<?php
  global $post_id;
  global $cat;
  global $title;
  global $thumbnail;
  global $cat_name;
?>

<div class="project_item">
  <a href="<?= esc_url(get_permalink()) ?>">
    <img src="<?= $thumbnail ?>">
  </a>
  <div class="txt_wrap">
    <span class="category"><?= $cat_name ?></span>
    <h3 class="case_name"><?= $title ?></h3>
  </div>
</div><!-- project_item -->

<?php get_header(); ?>

<?php
$catSlug = get_blog_category();
?>

<!-- 一覧 -->
<section class="blogs blogs_list">
  <div class="blogs_list__title">
    <h1 class="headline">Blog</h1>
    <ul>
      <li class="<?= !$catSlug ? 'active' : '' ?>">
        <a href="<?= home_url("blog"); ?>">All</a>
      </li>
      <?php
      // 親カテゴリーのものだけを一覧で取得
      $args = array(
        'parent' => 0,
        'orderby' => 'term_order',
        'order' => 'ASC'
      );
      $categories = get_categories($args);
      foreach ($categories as $category) :
      ?>
        <li class="<?= $catSlug == $category->slug ? 'active' : '' ?>">
          <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php get_template_part('parts/blogs', null, array(
    "first_content_flg" => true,
    "list_flg" => true,
    "category_flg" => true,
  )); ?>
</section>

<?php get_footer(); ?>
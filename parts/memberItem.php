<!-- メンバー -->
<?php
$args = wp_parse_args(
  $args,
  array(
    'id' => '',
  )
);

$id = $args['id'];
$title = get_post($args['id'])->post_title;
$image = get_the_post_thumbnail_url($id);
$position = get_post_meta($id, 'position', true);
$instagram = get_post_meta($id, 'instagram', true);
$facebook = get_post_meta($id, 'facebook', true);
$twitter = get_post_meta($id, 'twitter', true);
$folio = get_post_meta($id, 'folio', true);
?>
<div class="member_item">
  <div class="img_wrap">
    <img src="<?= $image ?>">
  </div>
  <div class="txt_wrap">
    <h3 class="name"><?= $title ?></h3>
    <span class="role"><?= $position ?> </span>
    <div class="ref">
      <a class="ig" href="<?= $instagram ?>"></a>
      <a class="fb" href="<?= $facebook ?>"></a>
      <a class="tw" href="<?= $twitter ?>"></a>
      <a class="folio" href="<?= $folio ?>"></a>
    </div>
  </div>
</div><!-- member_item -->
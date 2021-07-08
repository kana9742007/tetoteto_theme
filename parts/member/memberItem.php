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
$roles = SCF::get('role');
$instagram = SCF::get('instagram');
$facebook = SCF::get('facebook');
$twitter = SCF::get('twitter');
$folio = SCF::get('folio');
?>
<div class="member_item">
  <div class="img_wrap">
    <?php if ($image) : ?>
      <img src="<?= $image ?>">
    <?php else :  ?>
      <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/member_dummy.jpg">
    <?php endif;  ?>
  </div>
  <div class="txt_wrap">
    <h3 class="name"><?= $title ?></h3>
    <span class="role"><?= $roles ?></span>
    <div class="ref">
      <?php if(get_post_meta($id, 'instagram',true)): ?>
      <a class="ig" target="_blank" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_ig.png);" href="<?= $instagram ?>"></a>
      <?php endif; ?>
      <?php if(get_post_meta($id, 'facebook',true)): ?>
      <a class="fb" target="_blank" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_fb.png);" href="<?= $facebook ?>"></a>
      <?php endif; ?>
      <?php if(get_post_meta($id, 'twitter',true)): ?>
      <a class="tw" target="_blank" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_tw.png);" href="<?= $twitter ?>"></a>
      <?php endif; ?>
      <?php if(get_post_meta($id, 'folio',true)): ?>
      <a class="folio" target="_blank" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_folio.png);" href="<?= $folio ?>"></a>
      <?php endif; ?>
    </div>
  </div>
</div><!-- member_item -->

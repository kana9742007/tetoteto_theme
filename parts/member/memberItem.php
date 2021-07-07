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
$roles = SCF::get('roles');
$instagram = get_post_meta($id, 'instagram', true);
$facebook = get_post_meta($id, 'facebook', true);
$twitter = get_post_meta($id, 'twitter', true);
$folio = get_post_meta($id, 'folio', true);
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
    <!-- <div class="roles"> -->
      <?php foreach ($roles as $role) : ?>
        <?php
        $lastContent = '';
        if ($role !== reset($roles)):
          $lastContent = 'role-last';
        endif; ?>
        <span class="role <?= $lastContent ?>"><?= $role['role'] ?> </span>
      <?php endforeach; ?>
    <!-- </div> -->
    <div class="ref">
      <a class="ig" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_ig.png);" href="<?= $instagram ?>"></a>
      <a class="fb" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_fb.png);" href="<?= $facebook ?>"></a>
      <a class="tw" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_tw.png);" href="<?= $twitter ?>"></a>
      <a class="folio" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/common/icon_folio.png);" href="<?= $folio ?>"></a>
    </div>
  </div>
</div><!-- member_item -->
<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    $post_id = get_the_ID();
    $meta = get_post_meta($post_id);
    $detail = nl2br(get_post_meta($post_id, 'case_detail', true));
    $url = get_post_meta($post_id, 'web_url', true);
    $credits = SCF::get('credits');
    $images = SCF::get('images');
    $project_flows = SCF::get('project_flows');
    $members = SCF::get('member');
    $title = get_the_title();
    $thumbnails = get_the_post_thumbnail_url();
    $sp_thumbnails_id = get_post_meta($post_id, 'sp_thumbnail', true);
    $sp_thumbnails = wp_get_attachment_url($sp_thumbnails_id);
    $cat = get_the_terms($post_id, 'case_cat');
    $cat_slug = $cat[0]->slug;
?>

    <article id="caseDetail" class="page-case-detail">

      <section class="section-lead">
        <div class="main_image" style="background-image: url(<?= $thumbnails ?>;)">
          <img src="<?= $sp_thumbnails ?>">
        </div>
        <div class="lead_txt">
          <div class="comp-section-title center">
            <span class="title_en">PROJECT</span>
            <h2 class="title_ja"><?= $title ?></h2>
          </div>

          <?php if (!empty($credits)) : ?>
            <div class="credit">
              <?php foreach ($credits as $c) : ?>
                <span><?= $c['credit'] ?> </span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($url)) : ?>
            <div class="comp-link-button">
              <a target="_blank" href="<?= $url ?>"><span>WEBサイトを見る</span></a>
            </div>
          <?php endif; ?>

          <?php if (!empty($detail)) : ?>
            <div class="desc_wrap">
              <p><?= $detail ?></p>
            </div>
          <?php endif; ?>

        </div><!-- lead_txt -->
      </section>

      <!-- 画像 -->
      <?php if (!empty($images)) : ?>
        <section class="section-visual">
          <div class="section_inner border">
            <div class="visual_wrap">
              <?php foreach ($images as $image) :
              ?>
                <div class="visual_item <?= $image['image_option'] ?> ">
                  <img src=" <?= wp_get_attachment_url($image['image']) ?> ">
                </div>
              <?php endforeach; ?>
            </div>
          </div><!-- section_inner -->
        </section>
      <?php endif; ?>

      <!-- FLOW -->
      <?php if (!empty($project_flows[0]['project_flow'])) : ?>
        <!-- 最初のデータの中身が空じゃなかったら -->
        <section class="section-flow">
          <div class="section_inner border">
            <div class="comp-section-title">
              <span class="title_en">FLOW</span>
              <h2 class="title_ja">プロジェクトの流れ</h2>
            </div>
            <div class="comp-flow-layout">
              <?php foreach ($project_flows as $flow) : ?>
                <div class="flow_item">
                  <div class="title_wrap">
                    <span class="date"><?= $flow['date'] ?></span>
                    <h3 class="flow_ttl"><?= $flow['project_flow'] ?></h3>
                  </div>
                  <?php if (!empty($flow['detail'])) : ?>
                    <div class="desc_wrap">
                      <p><?= $flow['detail'] ?></p>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div><!-- comp-flow-layout -->
          </div><!-- section_inner -->
        </section>
      <?php endif; ?>


      <!-- メンバー -->
      <?php if (!empty($members)) : ?>
        <section class="section-member">
          <div class="section_inner border">
            <div class="comp-section-title">
              <span class="title_en">TEAM MEMBER</span>
              <h2 class="title_ja">プロジェクトメンバー</h2>
            </div>
            <div class="comp-member-list">
              <?php foreach ($members as $m) :
                $member = array('id' => $m);
              ?>
                <?php get_template_part('parts/member/memberItem', null, $member); ?>
              <?php endforeach; ?>
            </div>
          </div><!-- section_inner -->
        </section>
      <?php endif; ?>

      <!-- 関連記事 -->
      <?php $catDetail = array('cat_slug' => $cat_slug, 'post_id' => $post_id); ?>
      <?php get_template_part('parts/case/otherProject', null, $catDetail); ?>
    </article>
<?php
  endwhile;
endif;
?>
<?php get_footer(); ?>
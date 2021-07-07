<?php get_header(); ?>
<article id="team" class="page-team-list">
  <section class="team-list">
    <div class="main_image" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/main.jpg;)">
      <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/main_sp.jpg">
    </div>
    <div class="section_inner">
      <div class="lead_txt">
        <div class="comp-section-title">
          <span class="title_en">TEAM MEMBER</span>
          <h2 class="title_ja">てとてとのチーム</h2>
        </div>
        <h3 class="sub_ttl">フリーランスから企業に勤めるクリエイター、<br>デザイナーから料理人まで、多種多彩なメンバーとワクワクを作っています。</h3>
      </div>

      <!-- TODO カテゴリー 絞り込み -->
      <div class="team-wrapper">
        <div class="comp-member-list">
          <?php get_template_part('parts/member/topMember', null); ?>
        </div>
      </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>
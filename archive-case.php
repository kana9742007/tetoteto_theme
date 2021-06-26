<?php get_header(); ?>
<article id="caseList" class="page-case-list">
  <section class="case-list">
    <div class="main_image" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/projectList.jpeg;)">
      <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/projectList.jpeg">
    </div>
    <div class="section_inner">
      <div class="lead_txt">
        <div class="comp-section-title">
          <span class="title_en">PROJECT LIST</span>
          <h2 class="title_ja">プロジェクト一覧</h2>
        </div>
        <h3 class="sub_ttl"><span>食のゼロイチを生み出し続ける、</span><span>クリエイターのための研究所。</span></h3>
      </div>

      <!-- TODO カテゴリー 絞り込み -->
      <div class="search-wrapper">
        <div class="search search-type">
          <p>タイプで絞り込む</p>
          <span class="search-line"></span>
          <?php get_template_part('parts/case/searchType', null,); ?>
        </div>
        <div class="search search-cat">
          <p>カテゴリで絞り込む</p>
          <?php get_template_part('parts/case/searchCat', null,); ?>
        </div>
      </div>

      <!-- カテゴリーリスト -->
      <?php get_template_part('parts/case/projectList', null,); ?>
    </div>
  </section>
</article>
<?php get_footer(); ?>
<?php get_header(); ?>
<article id="caseList" class="page-case-list">
  <section class="case-list">
    <div class="main_image" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/projectList.jpg;)">
      <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/projectList_sp.jpeg">
    </div>
    <div class="section_inner">
      <div class="lead_txt">
        <div class="comp-section-title">
          <span class="title_en">PROJECT LIST</span>
          <h2 class="title_ja">プロジェクト一覧</h2>
        </div>
        <h3 class="sub_ttl"><span>食のゼロイチを生み出し続ける、</span><span>クリエイターのための研究所。</span></h3>
      </div>

      <div id="serchWrapper" class="comp-search-wrapper">
        <div class="search_box search-type">
          <button class="toggle_button">
            <span class="txt">タイプで絞り込む</span>
            <span class="arrow"></span>
          </button>
          <div class="type_wrapper toggle_content">
            <?php get_template_part('parts/case/searchType'); ?>
          </div>
        </div><!-- search_box -->
        <div class="search_box search-cat">
          <button class="toggle_button">
            <span class="txt">カテゴリで絞り込む</span>
            <span class="arrow"></span>
          </button>
          <div class="case_wrapper toggle_content">
            <?php get_template_part('parts/case/searchCat'); ?>
          </div>
        </div> <!-- search_box -->
      </div><!-- comp-search-wrappe -->

      <!-- カテゴリーリスト -->
      <?php get_template_part('parts/case/projectList'); ?>
    </div>
  </section>
</article>
<?php get_footer(); ?>

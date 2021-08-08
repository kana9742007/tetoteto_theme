<?php get_header(); ?>
<article id="caseList" class="page-case-list">
  <section class="case-list">
    <div class="main_image" style="background-image: url(https://res.cloudinary.com/tetoteto/image/upload/f_auto,q_auto/v1628409109/case/projectList_tjrr9k.jpg);">
      <img src="https://res.cloudinary.com/tetoteto/image/upload/f_auto,q_auto/v1628409109/case/projectList_sp_xrndx0.jpg">
    </div>
    <div class="section_inner">
      <div class="lead_txt">
        <div class="comp-section-title">
          <span class="title_en">PROJECT LIST</span>
          <h2 class="title_ja">プロジェクト一覧</h2>
        </div>
        <h3 class="sub_ttl">こだわりを持ち、ハイクオリティーなものづくりを追求する生産者・クリエイターを巻き込みながら、食を中心とした、生活の感度を高めるプロダクトを作っています。</h3>
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

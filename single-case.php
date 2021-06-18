<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    $meta = get_post_meta(get_the_ID());
    $title = get_the_title();
    $post_id = get_the_ID();
    $date = get_the_date('Y年n月d日');
    $thumbnails = get_the_post_thumbnail_url();
?>

    <article id="caseDetail" class="page-case-detail">
      <section class="section-lead">
        <div class="main_image" style="background-image: url(assets/img/detail/main.jpg);">
          <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/main_sp.jpg">
        </div>
        <div class="lead_txt">
          <div class="comp-section-title center">
            <span class="title_en">PROJECT</span>
            <h2 class="title_ja"><?= $title ?></h2>
          </div>
          <div class="credit">
            <span>Pruduce & Direction / TETOTETO Inc.</span>
            <span>Design / 菊池 由紀子</span>
            <span>Photo / 井上 豪希</span>
            <span>Client / 株式会社 エンポンテ</span>
          </div>
          <div class="comp-link-button">
            <a target="_blank" href="http://www.beanstokyo.com/"><span>WEBサイトを見る</span></a>
          </div>
          <div class="desc_wrap">
            <p>沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。
            <p>
            <p>商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。</p>
          </div>
        </div><!-- lead_txt -->
      </section>
      <section class="section-visual">
        <div class="section_inner border">
          <div class="visual_wrap">
            <div class="visual_item">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual01.jpg">
            </div>
            <div class="visual_item">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual02.jpg">
            </div>
            <div class="visual_item column2">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual03.jpg">
            </div>
            <div class="visual_item column2">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual04.jpg">
            </div>
            <div class="visual_item column2">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual05.jpg">
            </div>
            <div class="visual_item column2">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/detail/visual06.jpg">
            </div>
          </div>
        </div><!-- section_inner -->
      </section>
      <section class="section-flow">
        <div class="section_inner border">
          <div class="comp-section-title">
            <span class="title_en">FLOW</span>
            <h2 class="title_ja">プロジェクトの流れ</h2>
          </div>
          <div class="comp-flow-layout">
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/03/11</span>
                <h3 class="flow_ttl">プロジェクトスタート</h3>
              </div>
              <div class="desc_wrap">
                <p>キックオフMTGを敢行。クライアント様との要件定義・プロジェクトの納品期間などをすり合わせ。</p>
              </div>
            </div>
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/03/24</span>
                <h3 class="flow_ttl">プロダクトデザイナーとして菊池氏がジョイン</h3>
              </div>
            </div>
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/04/30</span>
                <h3 class="flow_ttl">プロダクトの完成</h3>
              </div>
            </div>
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/05/14</span>
                <h3 class="flow_ttl">素材撮影・ロケを敢行</h3>
              </div>
            </div>
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/06/01</span>
                <h3 class="flow_ttl">ビーンズトーキョーWEBサイトリリース。</h3>
              </div>
            </div>
            <div class="flow_item">
              <div class="title_wrap">
                <span class="date">2019/06/01</span>
                <h3 class="flow_ttl">ECでの販売を開始。</h3>
              </div>
              <div class="desc_wrap">
                <p>BASEを利用したECサイトをリリース。WEBサイトより商品が通販で買えるようになりました。</p>
              </div>
            </div>
          </div><!-- comp-flow-layout -->
        </div><!-- section_inner -->
      </section>
      <section class="section-member">
        <div class="section_inner border">
          <div class="comp-section-title">
            <span class="title_en">TEAM MEMBER</span>
            <h2 class="title_ja">プロジェクトメンバー</h2>
          </div>
          <div class="comp-member-list">
            <div class="member_item">
              <div class="img_wrap">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/member01.jpg">
              </div>
              <div class="txt_wrap">
                <h3 class="name">井上豪希</h3>
                <span class="role">プロデューサー・料理家</span>
                <div class="ref">
                  <a class="ig" href="#aaaa"></a>
                  <a class="fb" href="#aaaa"></a>
                  <a class="tw" href="#aaaa"></a>
                  <a class="folio" href="#aaaa"></a>
                </div>
              </div>
            </div><!-- member_item -->
            <div class="member_item">
              <div class="img_wrap">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/member02.jpg">
              </div>
              <div class="txt_wrap">
                <h3 class="name">井上桃子</h3>
                <span class="role">ライフスタイルデザイナー</span>
                <div class="ref">
                  <a class="ig" href="#aaaa"></a>
                  <a class="fb" href="#aaaa"></a>
                  <a class="tw" href="#aaaa"></a>
                  <a class="folio" href="#aaaa"></a>
                </div>
              </div>
            </div><!-- member_item -->
            <div class="member_item">
              <div class="img_wrap">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/member/member_dummy.jpg">
              </div>
              <div class="txt_wrap">
                <h3 class="name">菊池 由紀子</h3>
                <span class="role">プロダクトデザイン</span>
                <div class="ref">
                  <a class="ig" href="#aaaa"></a>
                  <a class="fb" href="#aaaa"></a>
                  <a class="tw" href="#aaaa"></a>
                  <a class="folio" href="#aaaa"></a>
                </div>
              </div>
            </div><!-- member_item -->
          </div>
        </div><!-- section_inner -->
      </section>
      <section class="section-relation">
        <div class="section_inner">
          <div class="comp-section-title">
            <span class="title_en">OTHER PROJECT</span>
            <h2 class="title_ja"><span>その他のプロジェクト</span>をみる</h2>
          </div>
          <div class="comp-project-list detail">
            <div class="project_item">
              <a href="#aaaa">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case01.jpg">
              </a>
              <div class="txt_wrap">
                <span class="category">PROJECT</span>
                <h3 class="case_name">ビーンズトーキョー</h3>
              </div>
            </div><!-- project_item -->
            <div class="project_item">
              <a href="#aaaa">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case04.jpg">
              </a>
              <div class="txt_wrap">
                <span class="category">PROJECT</span>
                <h3 class="case_name"><span>ゴウキさんの</span>りんごバター</h3>
              </div>
            </div><!-- project_item -->
            <div class="project_item">
              <a href="#aaaa">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case03.jpg">
              </a>
              <div class="txt_wrap">
                <span class="category">PROJECT</span>
                <h3 class="case_name">WAKO COFFE BREWING</h3>
              </div>
            </div><!-- project_item -->
            <div class="project_item">
              <a href="#aaaa">
                <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case02.jpg">
              </a>
              <div class="txt_wrap">
                <span class="category">PROJECT</span>
                <h3 class="case_name">金楠水産</h3>
              </div>
            </div><!-- project_item -->
          </div><!-- comp-project-list -->
        </div><!-- section_inner -->
      </section>
    </article>
<?php
  endwhile;
endif;
?>
<?php get_footer(); ?>
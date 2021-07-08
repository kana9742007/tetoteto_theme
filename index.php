<?php get_header(); ?>
<div id="loading" class="comp-index-loading">
  <div id="loadInner" class="load_inner">
    <div class="loading_content">
      <div id="logoAnimation" class="logo_graphic">
        <span class="line line_red"></span>
        <span class="line line_yellow"></span>
        <span class="line line_green"></span>
        <span class="line line_blue"></span>
        <span class="square sq1"></span>
        <span class="square sq2"></span>
        <span class="square sq3"></span>
        <span class="square sq4"></span>
      </div>
      <div id="logoTxt" class="logo_txt">
      </div>
      <div class="loading_bar">
        <span></span>
      </div>
    </div>
    <div class="height_adjust"></div>
  </div>
</div>
<article id="index" class="page-index">
  <section id="main" class="section-main">
    <span class="index_title_en">TETOTETO - LIFE STYLE BASED CREATIVE</span>
    <div class="main_inner">
      <div class="main_image">
        <ul id="mainSlider" class="comp-main-slider">
          <li class="main0">
            <span class="img_wrap" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main01.jpg);">
              <img class="pc_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main01.jpg">
              <img class="sp_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main01_sp.jpg">
            </span>
            <div class="txt_wrap">
              <div class="txt_inner">
                <span class="category">PRODUCE</span>
                <a class="title" href="#aaaa">とどめ茶〜ごだわり狭山茶〜</a>
                <p class="desc">そのお茶の味は、まさに「とどめ」。日本茶の味を極めるために生まれた新ブランド「とどめ茶 -TODOMECHA-」</p>
              </div>
            </div>
          </li>
          <li class="main1">
            <span class="img_wrap" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main02.jpg);">
              <img class="pc_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main02.jpg">
              <img class="sp_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main02_sp.jpg">
            </span>
            <div class="txt_wrap">
              <div class="txt_inner">
                <span class="category">PRODUCE</span>
                <a class="title" href="#aaaa">ビーンズトーキョー</a>
                <p class="desc">日本発の豆菓子で、美味しい笑顔をもっと、楽しい時間をずっと。</p>
              </div>
            </div>
          </li>
          <li class="main2">
            <span class="img_wrap" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main03.jpg);">
              <img class="pc_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main03.jpg">
              <img class="sp_image" src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/main03_sp.jpg">
            </span>
            <div class="txt_wrap">
              <div class="txt_inner">
                <span class="category">PRODUCE</span>
                <a class="title" href="#aaaa">金楠水産</a>
                <p class="desc">明石で100年たこを茹で続けた男たちの、究極の茹でたこ。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="main_slider_bar">
        <div class="slide_number">
          <span id="currentNum" class="current_num">01</span>
          <span class="slash"></span>
          <span id="allNum" class="all_num">03</span>
        </div>
        <div id="gauge" class="gauge_wrap">
          <div class="gauge_inner">
            <span id="gaugeDisplay" class="gauge_display"></span>
          </div>
        </div>
        <div class="slide_button">
          <button id="mainSlidePrev" class="comp-ctrl-button upper"></button>
          <button id="mainSlideNext" class="comp-ctrl-button bottom"></button>
        </div>
      </div>
    </div><!-- main_inner -->
  </section>
  <section class="section-about">
    <div class="section_inner border">
      <div class="img_wrap">
        <img src="<?= get_template_directory_uri() ?>/assets/img/index/about_img.jpg">
      </div>
      <div class="txt_wrap">
        <div class="comp-section-title margin">
          <span class="title_en">ABOUT</span>
          <h2 class="title_ja">私たちについて</h2>
        </div>
        <div class="img_wrap">
          <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/about_img.jpg">
        </div>
        <h3 class="sub_ttl"><span>暮らしの感度を高める</span><span>クリエイティブプロダクション</span></h3>
        <div class="desc_wrap">
          <p>私たちは、日々のくらしと丁寧に向き合っていきたいと思っています。都会の真ん中でリアルな「生産」が見えない暮らしをしていると、ただ消費することに慣れてしまいます。</p>
          <p>そんな生活にふと疑問を感じた時、都会にいながらも丁寧なくらしに向き合いたいと模索しはじめました。旬の食材や植物に囲まれた食卓で四季を感じたり、作り手の思いや、背景にある物語に向き合うことであたりまえの日常がキラキラと楽しいものになりました。</p>
          <p>そして、昨日よりちょっと良い今日を作るために、私たちは「てとてと」という活動をはじめました。</p>
        </div>
        <div class="comp-link-button">
          <a href="/about"><span>詳しく知る</span></a>
        </div>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-case">
    <div class="section_inner border">
      <div class="comp-section-title">
        <span class="title_en">CREATIVE CASE</span>
        <h2 class="title_ja">制作事例</h2>
      </div>
      <div class="filter_wrap">
      </div>
      <div class="comp-case-slider">
        <div id="caseSlider" class="slick-slider">
          <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
              $wp_query = new WP_Query();
              $param = array(
                'posts_per_page' => '5',
                'orderby' => 'rand',
                'post_status' => 'publish',
                'post_type' => 'case',
                'paged' => $paged,
              );
              $wp_query->query($param);
              if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
              $post_id = get_the_ID();
              $title = get_the_title($post_id);
              $cat = get_the_terms($post_id, 'case_cat');
              $thumbnails = get_the_post_thumbnail_url();
              $sp_thumbnails_id = SCF::get('sp_thumbnail');
              $sp_thumbnails = wp_get_attachment_image_src($sp_thumbnails_id, 'full');
              $thumbnail = $sp_thumbnails[0];
              $cat_name = $cat[0]->name;
              ?>
            <div class="item_box">
              <a href="<?php the_permalink();?>">
                <img src="<?= $thumbnail ?>">
              </a>
              <div class="txt_wrap">
                <span class="category"><?= $cat_name ?></span>
                <h3 class="case_name"><?= $title ?></h3>
              </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
      </div><!-- comp-case-slider -->
      <div class="comp-link-button large center">
        <a href="/case"><span>制作事例一覧を見る</span></a>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-space">
    <div class="section_inner border">
      <div class="img_wrap">
        <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/space_img.jpg">
      </div>
      <div class="txt_wrap">
        <div class="comp-section-title">
          <span class="title_en">CREATIVE LABO</span>
          <h2 class="title_ja">シェアスペースについて</h2>
        </div>
        <div class="img_wrap"></div>
        <h3 class="sub_ttl"><span>食のゼロイチを生み出し続ける、</span><span>クリエイターのための研究所。</span></h3>
        <div class="desc_wrap">
          <p>キッチンスタジオ、プライベートサロン、コミュニティスペース、アトリエなど、その時々で必要に応じた姿に変化する空間です。どの役割であっても、根底には「食」や「暮らし」という、私たちが大切にしているエッセンスで繋がっています。</p>
          <p>この空間で語らい、時に食卓を共にし、繋がった縁で様々なプロジェクトやプロダクト、アイデアが生まれています。私たちの仕事のほとんどは、この空間で生まれて、この空間で育まれ、その後もこの空間で繋がったご縁で続いています。</p>
          <p>「食」という広く深い領域に埋まった課題を解決するために、私たちはこの空間を共にできる仲間と、常にワクワクする解決法を研究しています。</p>
        </div>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-member" style="display: none;">
    <div class="section_inner border">
      <div class="comp-title-flex">
        <div class="comp-section-title">
          <span class="title_en">TEAM MEMBER</span>
          <h2 class="title_ja"><span>てとてとの</span>チームメンバー</h2>
        </div>
        <div class="comp-link-button">
          <a href="/team"><span>メンバー一覧</span></a>
        </div>
      </div>
      <div class="comp-member-list index">
        <?php get_template_part('parts/member/topMember', null); ?>
      </div>
      <div class="comp-link-button large center sp">
        <a href="/team"><span>メンバー一覧</span></a>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-blog">
    <div class="section_inner border">
      <div class="comp-title-flex">
        <div class="comp-section-title">
          <span class="title_en">BLOG&CONTENTS</span>
          <h2 class="title_ja" style="text-indent: -0.15em;">ブログ・最新情報</h2>
        </div>
        <div class="comp-link-button">
          <a target="_blank" href="http://tetoteto.info/"><span>記事をもっと見る</span></a>
        </div>
      </div>
      <div id="blogItem" class="comp-blog-list">
        <!-- FEED FROM REST API -->
      </div><!-- comp-blog-list -->
      <div class="comp-link-button large center sp">
        <a target="_blank" href="http://tetoteto.info/"><span>記事をもっと見る</span></a>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-produce">
    <div class="section_inner">
      <div class="comp-section-title">
        <span class="title_en">SHOP LINK</span>
        <h2 class="title_ja"><span>プロデュース商品の</span>購入はこちら</h2>
      </div>
      <div class="comp-shop-link">
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://www.ninninnin.jp/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link01.jpg"></a>
          <div class="txt_wrap">
            <a href="https://www.ninninnin.jp/" target="_blank" class="title">NIN</a>
            <p class="desc">美しいものを瓶に詰めてお届けします。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://tetotaro.stores.jp/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link02.jpg"></a>
          <div class="txt_wrap">
            <a href="https://tetotaro.stores.jp/" target="_blank" class="title">てとたろうコーラ</a>
            <p class="desc">ひたすら味のみを追及した原価無視のコーラです。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://itwokashi.official.ec/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link03.jpg"></a>
          <div class="txt_wrap">
            <a href="https://itwokashi.official.ec/" target="_blank" class="title">It Wokashi</a>
            <p class="desc">究極のふわふわ、とろとろを追及した新感覚の大福です。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://kanekusu.official.ec/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link04.jpg"></a>
          <div class="txt_wrap">
            <a href="https://kanekusu.official.ec/" target="_blank" class="title">金楠水産の明石だこ</a>
            <p class="desc">明石で100年たこを茹で続けた男たちの究極の茹でたこ。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://shop.lml.co.jp/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link05.jpg"></a>
          <div class="txt_wrap">
            <a href="https://shop.lml.co.jp/" target="_blank" class="title">レモンマートル</a>
            <p class="desc">“森の治療薬”とも呼ばれる、つよくてやさしい、抗菌の王。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://nobeyama.base.shop/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link06.jpg"></a>
          <div class="txt_wrap">
            <a href="https://nobeyama.base.shop/" target="_blank" class="title">野辺山ほうれん草</a>
            <p class="desc">標高1300ｍの長野県野辺山高原で栽培するほうれん草を使ったカレーペースト</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://nikudevise.base.shop/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link07.jpg"></a>
          <div class="txt_wrap">
            <a href="https://nikudevise.base.shop/" target="_blank" class="title">NIKU DEVISE</a>
            <p class="desc">熟成肉を余すところなく活かし、熟成肉のブランド価値をあげるブランド。</p>
          </div>
        </div>
        <div class="link_item">
          <a class="img_wrap" target="_blank" href="https://todome.official.ec/"><img src="<?= get_template_directory_uri() ?>/assets/img/links/link08.jpg"></a>
          <div class="txt_wrap">
            <a href="https://todome.official.ec/" target="_blank" class="title">とどめ茶</a>
            <p class="desc">徹底的に管理された土から育ついい原葉。製茶の原点、手揉み茶製法の探求。</p>
          </div>
        </div>
      </div><!-- comp-shop-link -->
    </div><!-- section_inner -->
  </section>
</article>
<?php get_footer(); ?>

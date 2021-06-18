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
        <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/index/about_img.jpg">
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
          <a href="#aaaa"><span>詳しく知る</span></a>
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
          <div class="item_box">
            <a href="#aaaa">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case01.jpg">
            </a>
            <div class="txt_wrap">
              <span class="category">PROJECT</span>
              <h3 class="case_name">ビーンズトーキョー</h3>
            </div>
          </div>
          <div class="item_box">
            <a href="#aaaa">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case02.jpg">
            </a>
            <div class="txt_wrap">
              <span class="category">PROJECT</span>
              <h3 class="case_name">金楠水産</h3>
            </div>
          </div>
          <div class="item_box">
            <a href="#aaaa">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case03.jpg">
            </a>
            <div class="txt_wrap">
              <span class="category">PROJECT</span>
              <h3 class="case_name">WAKO COFFE BREWING</h3>
            </div>
          </div>
          <div class="item_box">
            <a href="#aaaa">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case04.jpg">
            </a>
            <div class="txt_wrap">
              <span class="category">PROJECT</span>
              <h3 class="case_name">ゴウキさんのりんごバター</h3>
            </div>
          </div>
          <div class="item_box">
            <a href="#aaaa">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/case/case05.jpg">
            </a>
            <div class="txt_wrap">
              <span class="category">PROJECT</span>
              <h3 class="case_name">とどめ茶 -TODOMECHA-</h3>
            </div>
          </div>
        </div>
      </div><!-- comp-case-slider -->
      <div class="comp-link-button large center">
        <a href="#aaaa"><span>制作事例一覧を見る</span></a>
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
        <div class="desc_flex">
          <div class="desc_wrap">
            <p>私たちは、日々のくらしと丁寧に向き合っていきたいと思っています。都会の真ん中でリアルな「生産」が見えない暮らしをしていると、ただ消費することに慣れてしまいます。</p>
            <p>そんな生活にふと疑問を感じた時、都会にいながらも丁寧なくらしに向き合いたいと模索しはじめました。旬の食材や植物に囲まれた食卓で四季を感じたり、作り手の思いや、背景にある物語に向き合うことであたりまえの日常がキラキラと楽しいものになりました。</p>
          </div>
          <div class="desc_wrap">
            <p>そんな生活にふと疑問を感じた時、都会にいながらも丁寧なくらしに向き合いたいと模索しはじめました。旬の食材や植物に囲まれた食卓で四季を感じたり、作り手の思いや、背景にある物語に向き合うことであたりまえの日常がキラキラと楽しいものになりました。そして、昨日よりちょっと良い今日を作るために、私たちは「てとてと」という活動をはじめまし。</p>
            <p>そして、昨日よりちょっと良い今日を作るために、私たちは「てとてと」という活動をはじめました。</p>
          </div>
        </div>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-member">
    <div class="section_inner border">
      <div class="comp-title-flex">
        <div class="comp-section-title">
          <span class="title_en">TEAM MEMBER</span>
          <h2 class="title_ja"><span>てとてとの</span>チームメンバー</h2>
        </div>
        <div class="comp-link-button">
          <a href="#aaaa"><span>メンバー一覧</span></a>
        </div>
      </div>
      <div class="comp-member-list index">
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
            <h3 class="name">澤田 直大</h3>
            <span class="role">フォトグラファー / 動画編集者</span>
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
            <h3 class="name">田中 至</h3>
            <span class="role">WEBデザイナー/エンジニア</span>
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
            <span class="role">グラフィックデザイナー</span>
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
            <h3 class="name">八木 彩</h3>
            <span class="role">プロダクトデザイナー</span>
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
            <h3 class="name">熊崎 慎之介</h3>
            <span class="role">デジタルデザイナー</span>
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
            <h3 class="name">水野 愛理</h3>
            <span class="role">グラフィックデザイナー</span>
            <div class="ref">
              <a class="ig" href="#aaaa"></a>
              <a class="fb" href="#aaaa"></a>
              <a class="tw" href="#aaaa"></a>
              <a class="folio" href="#aaaa"></a>
            </div>
          </div>
        </div><!-- member_item -->
      </div>
      <div class="comp-link-button large center sp">
        <a href="#aaaa"><span>メンバー一覧</span></a>
      </div>
    </div><!-- section_inner -->
  </section>
  <section class="section-blog">
    <div class="section_inner border">
      <div class="comp-title-flex">
        <div class="comp-section-title">
          <span class="title_en">BLOG&CONTENTS</span>
          <h2 class="title_ja">ブログ・最新情報</h2>
        </div>
        <div class="comp-link-button">
          <a href="#aaaa"><span>記事をもっと見る</span></a>
        </div>
      </div>
      <div class="comp-blog-list">
        <div class="blog_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/blog/blog01.jpg"></a>
          </div>
          <div class="title_wrap">
            <span class="date">2021年03月17日</span>
            <a class="title" href="#aaaa">「ゴウキさんのりんごバター」がネットから購入できるようになりました！</a>
          </div>
        </div>
        <div class="blog_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/blog/blog02.jpg"></a>
          </div>
          <div class="title_wrap">
            <span class="date">2021年01月02日</span>
            <a class="title" href="#aaaa">あけましておめでとうございます 2021</a>
          </div>
        </div>
        <div class="blog_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/blog/blog03.jpg"></a>
          </div>
          <div class="title_wrap">
            <span class="date">2021年01月01日</span>
            <a class="title" href="#aaaa">【テレビ出演】羽鳥慎一モーニングショーで紹介されました。</a>
          </div>
        </div>
      </div><!-- comp-blog-list -->
      <div class="comp-link-button large center sp">
        <a href="#aaaa"><span>記事をもっと見る</span></a>
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
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link01.jpg"></a>
          <div class="txt_wrap"><span>ゴウキさんの</span><span>りんごバター</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link02.jpg"></a>
          <div class="txt_wrap"><span>ItWokashi</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link03.jpg"></a>
          <div class="txt_wrap"><span>金楠水産</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link04.jpg"></a>
          <div class="txt_wrap"><span>レモンマートル</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link05.jpg"></a>
          <div class="txt_wrap"><span>てとたろうコーラ</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link06.jpg"></a>
          <div class="txt_wrap"><span>とどめ茶</span></div>
        </div>
        <div class="link_item">
          <a class="img_wrap" href="#aaaa"><img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/links/link07.jpg"></a>
          <div class="txt_wrap"><span>野辺山ほうれん草</span><span>カレーペースト</span></div>
        </div>
      </div><!-- comp-shop-link -->
    </div><!-- section_inner -->
  </section>
</article>
<div id="hummenu" class="hummenu">
  <div class="hummenu_inner">
    <div class="height_adjust"></div>
    <div class="content">
      <a class="h_logo fade_box" href="#aaaa"></a>
      <span class="copy fade_box"><span>暮らしの感度を高める</span><span>クリエイティブプロダクション</span></span>
      <nav class="header_nav fade_box">
        <ul>
          <li class="fade_box"><a href="#aaaa">私たちについて</a></li>
          <li class="fade_box"><a href="#aaaa">制作実績</a></li>
          <li class="fade_box"><a href="#aaaa">プロジェクトメンバー</a></li>
          <li class="fade_box"><a href="#aaaa">会社概要</a></li>
          <li class="fade_box"><a href="#aaaa">ブログ</a></li>
        </ul>
      </nav>
      <div class="h_footer">
        <a class="contact fade_box" href="#aaaa">お問い合わせ</a>
        <div class="sns_wrap fade_box">
          <a class="ig" href="#aaaa"></a>
          <a class="fb" href="#aaaa"></a>
          <a class="tw" href="#aaaa"></a>
        </div>
      </div>
    </div>
  </div>
</div><!-- hummenu -->
<?php get_footer(); ?>
<?php get_header(); ?>

<article id="about" class="page-about">
  <div id="serviceBg" class="service_bg"></div>
  <style>
    .service_bg {
      background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/main.jpg)
    }

    @media screen and (max-width: 728px) {
      .service_bg {
        background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/main_sp.jpg)
      }
    }
  </style>
  <section class="section-lead">
    <div class="section_inner">
      <div class="comp-section-title white">
        <span class="title_en">ABOUT US</span>
        <h1 class="title_ja">TETOTETO.incに<span>できること</span></h1>
      </div>
      <div class="lead_txt">
        <h2 class="lead_ttl">わくわくを、つくる。</h2>
        <div class="lead_desc">
          <p><span>作り手がわくわくすると、<font>使い手もわくわくする。</font></span><span>世の中がわくわくでつながっていく。</span><span>めざすのは、そんなものづくり。</span></p>
          <p><span>どんなわくわくが待っているの？</span>
            <font>どうしたらそこへ辿りつけるの？</font><span>私たちは、そんなあなたと一緒に、<font>企画を考え、仲間を集め、</font></span><span>目的地にたどり着くまで、並走します。</span>
          </p>
          <p><span>あなたと新しいものが生み出せることを、</span><span>私たちも、楽しみにお待ちしています。</span></p>
          <p>わくわくは、いいものを生み出す力だと信じて。</p>
        </div>
      </div>
    </div> <!-- section_inner -->
  </section>
  <section class="section-works">
    <div class="section_inner border">
      <div class="comp-section-title">
        <span class="title_en">WORKS</span>
        <h2 class="title_ja">わたしたちの仕事</h2>
      </div>
      <h3 class="sub_ttl"><span>食を中心に、ひとの暮らしの感度を</span><span>高めるプロダクトを作っています。</span></h3>
      <div class="comp-work-slider">
        <div id="workSlider" class="slick-slider">
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/work01.jpg">
            </div>
          </div>
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/work02.jpg">
            </div>
          </div>
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/work03.jpg">
            </div>
          </div>
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/work04.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="desc_wrap">
        <p>沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。</p>
      </div>
      <div class="comp-link-button large center">
        <a href="#aaaa"><span>制作事例一覧を見る</span></a>
      </div>
    </div> <!-- section_inner -->
  </section>
  <section class="section-flow">
    <div class="section_inner border">
      <div class="comp-section-title center">
        <span class="title_en">WORK FLOW</span>
        <h2 class="title_ja">仕事の進め方</h2>
      </div>
      <h3 class="sub_ttl"><span>つくり人とひろげる人を巻き込みながら、</span><span>プロダクトをより魅力的に。</span></h3>
      <div class="comp-flow-layout workflow">
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">ヒアリング・製品研究</h3>
            </div>
            <div class="desc_wrap">
              <p>TETOTETOが、直接お客様と打ち合わせさせて頂きます。打ち合わせの会話や商品サンプルなどをもとに会社・人・商品が持つ隠れた魅力を見つけ出し、強いコンセプトをつくりを進めます。</p>
            </div>
          </div>
        </div>
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">ゴール設計</h3>
            </div>
            <div class="desc_wrap">
              <p>お客様の製品をより魅力的なプロダクトとして世の中に拡げるための、プロジェクトのゴールを設計します。ゴールは、ECサイトでの販売体制の構築になったり、店舗の理ブランディングになったり、プロジェクトによって様々です。</p>
            </div>
          </div>
        </div>
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">チームビルディング</h3>
            </div>
            <div class="desc_wrap">
              <p>TETOTETOが主導となって目標達成に必要なクリエイターを集めてプロジェクトチームを構成します。TETOTETOには、有名企業に在籍しながらパラレルワーカーとして活動している方から、フリーランスとして長年実績を積んできた方まで多種多様なクリエイターが在籍しております。業種もデザイナーから動画編集者・ライターまで多種多様です。</p>
            </div>
          </div>
        </div>
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">クリエイター含め制作活動を開始</h3>
            </div>
            <div class="desc_wrap">
              <p>プロジェクトの目標達成に必要なクリエイターを集め、いよいよ実際の商品開発に入ります。プロジェクトの目標達成に必要なクリエイターを集め、いよいよ実際の商品開発に入ります。</p>
            </div>
          </div>
        </div>
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">プロダクトの完成・リリース</h3>
            </div>
            <div class="desc_wrap">
              <p>準備期間を経て、新しいプロダクトやECサイトなど製品とそのクリエイティブを完成させます。制作だけでなく、必要に応じてマーケティングなどのプロモーション部分もサポートします。</p>
            </div>
          </div>
        </div>
        <div class="flow_item image">
          <div class="img_wrap">
            <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/flow_sample.jpg">
          </div>
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3 class="flow_ttl">プロジェクトリリース後の保守・運用サポートも。</h3>
            </div>
            <div class="desc_wrap">
              <p>プロジェクトの終了後も、その時点で契約終了。というわけではなく、プロダクトリリース後のサポートも可能です。具体的には、プロダクトをどのように拡大していくか？などのマーケティングの領域から、作成したWEBサイト・ECサイトの保守運用などを通じて、お客様と長く良好な関係を築きながらその拡大をフォローしています。</p>
            </div>
          </div>
        </div>
      </div><!-- comp-flow-layout -->
    </div> <!-- section_inner -->
  </section>
  <section class="section-policy">
    <div class="section_inner">
      <div class="comp-section-title center">
        <span class="title_en">OUR POLICY</span>
        <h2 class="title_ja">大切にしていること</h2>
      </div>
      <h3 class="sub_ttl"><span>“わくわくドリブン”</span><span>プロジェクトに関わる全ての人が、<font>誇れるものづくりを。</font></span></h3>
      <div class="comp-wakuwaku-image">
        <div id="wakuwakuSlider" class="slick-slider">
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/wakuwaku01.jpg">
            </div>
            <div class="txt_wrap">
              <span class="wakuwaku_ttl">つくる人</span>
              <p class="wakuwaku_desc"><span>自らの関わる製品を、</span><span>かっこよく自慢したくなるような</span><span>プロダクトとして再解釈する</span></p>
            </div>
          </div>
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/wakuwaku02.jpg">
            </div>
            <div class="txt_wrap">
              <span class="wakuwaku_ttl">ひろめる人</span>
              <p class="wakuwaku_desc"><span>そのプロダクトにおける</span><span>自分の仕事や、関わっていること</span><span>自体を誇りと思えること</span></p>
            </div>
          </div>
          <div class="item_box">
            <div class="img_wrap">
              <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/aboutus/wakuwaku03.jpg">
            </div>
            <div class="txt_wrap">
              <span class="wakuwaku_ttl">つかう人</span>
              <p class="wakuwaku_desc"><span>そのプロダクトを</span><span>食べたり使ったりすることで</span><span>高揚感を得られること</span></p>
            </div>
          </div>
        </div>
      </div><!-- comp-wakuwaku-image -->
      <div class="desc_wrap">
        <p>沖縄県の新たなお土産を作りたいというクライアントの依頼を受けて、新商品開発を行なったプロジェクト。商品企画、コンセプトメイク、レシピ提案、プロダクトデザイン、生産ラインの確保等、商品開発に関わる全方位を担当しました。商品開発に初めて挑戦するクライアントに対して、商品開発についてのナレッジの共有・蓄積を支援。同社のブランディングの方向性についても、コンサルティングを行いました。</p>
      </div>
    </div><!-- section_inner -->
  </section>
</article>

<?php get_footer(); ?>
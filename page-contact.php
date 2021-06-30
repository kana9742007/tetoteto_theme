<?php get_header(); ?>

<article id="contact" class="page-contact">
  <section class="section-contact">
    <div class="main_image" style="background-image: url(<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/contact/main_sp.jpg;)">
      <img src="<?= get_template_directory_uri() ?>/tetoteto-main/assets/img/contact/main_pc.jpg">
    </div>
    <div class="section_inner">
      <div class="lead_txt">
        <div class="comp-section-title">
          <span class="title_en">CONTACT</span>
          <h2 class="title_ja">お問い合わせ</h2>
        </div>
        <h3 class="sub_ttl">
          <span>
            TETOTETOにご興味を持っていただき誠にありがとうございます。<br>
            取材・ご依頼・ご相談など、お気軽にお問い合わせください。
          </span>
        </h3>
      </div>
      <form class="contact-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfsHGZGbgVG2tDBCsWtYf4Ncdh4sCHeELRaUCJEKxyg2ACbMQ/formResponse" target="_self" method="POST" id="mG61Hd">
        <div class="form_content">
          <label>▼お問い合わせ項目 <span class="required">必須</span></label>
          <div class="select-cover">
            <select name="entry.1408135657">
              <option value="">選択してください</option>
              <option value="取材などについての依頼">取材などについての依頼</option>
              <option value="プロジェクトに参画したい">プロジェクトに参画したい</option>
              <option value="お仕事をご依頼したい">お仕事をご依頼したい</option>
              <option value="業務提携などについて">業務提携などについて</option>
              <option value="その他">その他</option>
            </select>
          </div>
        </div>
        <div class="form_content">
          <label>▼お名前<span class="required">必須</span></label>
          <input placeholder="てとてと 太郎" type="text" name="entry.839566296" value="" required="required">
        </div>
        <div class="form_content">
          <label>▼メールアドレス<span class="required">必須</span></label>
          <input placeholder="example@tetoteto.co" type="text" name="entry.1407359512" value="" required="required">
        </div>
        <div class="form_content">
          <label>▼電話番号<span>必須</span></label>
          <input placeholder="000-1234-5678" type="text" name="entry.255823979" value="">
        </div>
        <div class="form_content">
          <label>▼所属・会社名<span>必須</span></label>
          <input placeholder="株式会社TETOTETO" type="text" name="entry.1033760270" value="">
        </div>
        <div class="form_content form_content__add-bottom">
          <label>▼お問い合わせ内容<span class="required">必須</span></label>
          <textarea type="text" cols="30" rows="4" name="entry.852812278" value=""></textarea>
        </div>
        <button type="submit" class="contact_button">内容を送信<span>する</span></button>
      </form>
    </div>
  </section>
</article>

<?php get_footer(); ?>
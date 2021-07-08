<?php get_header(); ?>

<article id="contact" class="page-contact">
  <section class="section-contact">
    <div class="main_image" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/contact/main.jpg;)">
      <img src="<?= get_template_directory_uri() ?>/assets/img/contact/main_sp.jpg">
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
      <div id="formWrap" class="comp-form-wrap">
        <div class="form_content">
          <label>
            <span class="title">お問い合わせ項目</span>
            <span class="option required">必須</span>
          </label>
          <div class="select-cover">
            <select name="category">
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
          <label>
            <span class="title">お名前</span>
            <span class="option required">必須</span>
          </label>
          <input placeholder="てとてと 太郎" type="text" name="username" value="" required="required">
        </div>
        <div class="form_content">
          <label>
            <span class="title">メールアドレス</span>
            <span class="option required">必須</span>
          </label>
          <input placeholder="example@tetoteto.co" type="text" name="usermail" value="" required="required">
        </div>
        <div class="form_content">
          <label>
            <span class="title">電話番号(ハイフンなし)</span>
            <span class="option">任意</span>
          </label>
          <input placeholder="0312345678" type="text" name="telnumber" value="">
        </div>
        <div class="form_content">
          <label>
            <span class="title">所属・会社名</span>
            <span class="option">任意</span>
          </label>
          <input placeholder="株式会社TETOTETO" type="text" name="company" value="">
        </div>
        <div class="form_content form_content__add-bottom">
          <label>
            <span class="title">お問い合わせ内容</span>
            <span class="option required">必須</span>
          </label>
          <textarea type="text" cols="30" rows="4" name="content" value=""></textarea>
        </div>
        <div class="privacy_wrap">
            <div class="privacy_ttl">プライバシーポリシー</div>
            <div class="privacy_inner">
              <div class="privacy_content">
                <h5>個人情報保護方針</h5>
                <p>株式会社TETOTETO（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                <h5>個人情報の管理</h5>
                <p>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
                <h5>個人情報の利用目的</h5>
                <p>本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。 お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                <h5>個人情報の第三者への開示・提供の禁止</h5>
                <p>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>・お客さまの同意がある場合<br>・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>・法令に基づき開示することが必要である場合</p>
                <h5>個人情報の安全対策</h5>
                <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                <h5>ご本人の照会</h5>
                <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                <h5>法令、規範の遵守と見直し</h5>
                <p class="mb0">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
              </div>
            </div>
            <div class="agreement">
              <input id="agreeBox" name="agreement" type="checkbox">
              <label for="agreeBox" class="wrap">プライバシーポリシーに同意する</label>
            </div>
          </div>
          <div id="ajaxLoader" class="ajax_loader">
            <span class="loading"></span>
          </div>
          <div id="statusMessage" class="status_message hidden"></div>
          <div id="submitButton" class="submit_wrap disabled">
            <span class="text_wrap">
              <span class="ja">内容を送信する</span>
              <input type="button" value="送信" disabled="disabled">
            </span>
          </div>
      </div>
    </div>
  </section>
  <section class="section-hidden" style="opacity:0; height: 0; overflow: hidden;">
    <p>メッセージは送信されました。自動返信メールをご確認ください。・メッセージ送信に失敗しました。お手数ではございますが、時間を置いてもう一度お試しください。</p>
  </section>
</article>

<?php get_footer(); ?>

<?php
// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

  $page_flag = 2;

}
?>

<html lang="ja">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="鹿児島でのプライベートサロン">
    <link rel="canonical" href="">
    <link rel="icon" type="image/png" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lesson.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/sub.css">
    <title>お仕事依頼 | Rose Rose Rose</title>
    <meta name="google-site-verification" content="xfNzY8aeStBZUZtHtn0MsEsLpp4yKvaJCTk5VQRrXds" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3 sticky-top" style="line-height: 60px;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2 class="pt-2 text-white" style="font-size: 2.5em;">Rose Rose Rose</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fff;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="menu.html">メニュー</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://rose-3.stores.jp/" target="_blank">ショップ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="recruit.php">求人</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="free.php">フリーサロン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.html">サロン概要</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="">UARBAN ROSE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="reserve.php">ご予約</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="lesson.php">お仕事依頼</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="event.html">イベント情報</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="aboutSupport">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">TOP></a>
        </li>
        <li>
          Rose Rose Roseのお仕事依頼
        </li>
      </ol>
      <div class="detail">
        <h2 class="text-primary" style="text-align: center; margin-top: 40px; font-size: 45px;">Support for you</h2>
        <h1 style="text-align: center; font-size: 20px;">Rose Rose Roseへのお仕事依頼</h1>
        <p style="text-align: center;">
         
          <br>
      </div>

      <?php if( $page_flag === 1 ): ?>

      <h1 style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 25px;">入力内容の確認</h1>

      <form id="f1" method="post" action="conversion.php" style="text-align: center;" accept-charset="shift_jis">
        <div class="element_wrap">
          <label>お名前</label>
          <p><?php echo $_POST['name']; ?></p>
        </div>
        <div class="element_wrap">
          <label>電話番号</label>
          <p><?php echo $_POST['phone']; ?></p>
        </div>
        <div class="element_wrap">
          <label>メールアドレス</label>
          <p><?php echo $_POST['email']; ?></p>
        </div>
        <div class="element_wrap">
          <label>連絡方法</label>
          <p><?php echo $_POST['contact']; ?></p>
        </div>
        <div class="element_wrap">
          <label>性別</label>
          <p><?php echo $_POST['gender']; ?></p>
        </div>
        <div class="element_wrap">
          <label>年齢</label>
          <p><?php echo $_POST['age']; ?></p>
        </div>
        <div class="element_wrap">
          <label>お仕事依頼の内容</label>
          <p><?php echo $_POST['description']; ?></p>
        </div>
        
        
        <a href="lesson.php">戻る</a>
        <input type="submit" name="btn_submit" value="入力内容を送信" onclick="submitSJIS();">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
        <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
        <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
        <input type="hidden" name="description" value="<?php echo $_POST['description']; ?>">
      </form>

      <?php
    
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      $header = null;
      $auto_reply_subject = null;
      $auto_reply_text = null;
      $auto_reply_subject = null;
      $auto_reply_text = null;
      date_default_timezone_set('Asia/Tokyo');

      // ヘッダー情報を設定
      $header = "MIME-Version: 1.0\n";
      $header .= "From: Rose Rose Rose <roseroserose098@icloud.com>\n";
      $header .= "Reply-To: Rose Rose Rose <roseroserose098@icloud.com>\n";

      // 件名を設定
      $auto_reply_subject = '申し込みありがとうございます。';

      // 本文を設定
      $auto_reply_text = "この度は、RoseRoseRoseのお仕事依頼に申し込み頂き誠にありがとうございます。
      下記の内容で申し込みを受け付けました。\n\n";
      $auto_reply_text .= "申し込み日時：" . date("Y-m-d H:i") . "\n";
      $auto_reply_text .= "お名前：" . $_POST['name'] . "\n";
      $auto_reply_text .= "電話番号：" . $_POST['phone'] . "\n";
      $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $auto_reply_text .= "連絡方法：" . $_POST['contact'] . "\n";
      $auto_reply_text .= "性別：" . $_POST['gender'] . "\n";
      $auto_reply_text .= "年齢：" . $_POST['age'] . "\n";
      $auto_reply_text .= "お仕事依頼の内容：" . $_POST['description'] . "\n\n";
      $auto_reply_text .= "このメールは送信専用ですので、返信されてもご対応できかねます。" . "\n\n";
      $auto_reply_text .= "Rose Rose Rose 事務局";

      $to = $_POST['email'];

      mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $header);

      // 運営側へ送るメールの件名
      $admin_reply_subject = "Rose Rose Roseのお仕事依頼への申し込みを受け付けました";
      
      // 本文を設定
      $admin_reply_text = "下記の内容で申し込みがありました。\n\n";
      $admin_reply_text .= "申し込み日時：" . date("Y-m-d H:i") . "\n";
      $admin_reply_text .= "お名前：" . $_POST['name'] . "\n";
      $admin_reply_text .= "電話番号：" . $_POST['phone'] . "\n";
      $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $admin_reply_text .= "連絡方法：" . $_POST['contact'] . "\n";
      $admin_reply_text .= "性別：" . $_POST['gender'] . "\n";
      $admin_reply_text .= "年齢：" . $_POST['age'] . "\n";
      $admin_reply_text .= "お仕事依頼の内容：" . $_POST['description'] . "\n\n";
      // 運営側へメール送信
      mb_send_mail( 'funmon0722@icloud.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>

    <?php elseif( $page_flag === 2 ): ?>

    <p>送信が完了しました。</p>

    <?php else: ?>

      <div class="list">
        <h4>「美容サロン」にお願いしたいことはありますか？</h4>
        <ul>
          <li>
            お肌に関するアドバイスをしてほしい
          </li>
          <li>
            「メンター」として、いつでも質問を受けてほしい
          </li>
          <li>
            化粧品を購入する際に介添人としてアテンドしてほしい
          </li>
          <li>
            講座　セミナー
          </li>
          <!-- <li>
            プロダクト化粧品のアドバイス　店舗へのサポート
          </li>
          <li>
            美容クリニック・手術等のアテンド
          </li> -->
          <li>
            ※有料にて広告制作物、撮影及びセミナー出演や、マスメディアへの出演依頼を受けております。
          </li>
        </ul>
      </div>
      <div class="signUpBox">
        <p>
          
          <span></span>
          
          <br>
          
        </p>
        <p class="searchBtn">
          <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=657mzgof" target="_blank">LINEでカンタン依頼♪（無料）<br>※登録後にスタンプをお送りください🙇</a>
        </p>
      </div>
      <div class="pointBox">
        <div class="point">
          <h4 class="icon">Point1</h4>
          <h4 class="title">
            鹿児島で10年以上の
            <br>
            サービスの実績
          </h4>
          <p>

          </p>
        </div>
        <div class="point">
          <h4 class="icon">Point2</h4>
          <h4 class="title">
            大手実績あり
          </h4>
          <p>

          </p>
        </div>
        <div class="point">
          <h4 class="icon">Point3</h4>
          <h4 class="title">
            世界トップクラスの施術
          </h4>
          <p>

          </p>
        </div>
      </div>
      <main class="page-digest">
        <div class="digest-title__box">
          <h2 style="text-align: center;" class="digest-title">
            過去のイベント
          </h2>
          <section>
            <div class="concept__box">
              <h3 class="concept__title">
                「人は人でしか癒されない」
                <br>
                RoseRoseRoseの施術で癒されてください。。。
              </h3>
              <div class="concept-image__box"></div>
            </div>
          </section>
          <section class="full-width">
            <hr class="separate__line">
            <div class="anchor">
              <div class="item__box odd">
                <div class="item-image__box">
                  <div class="js-slick slick-initialized slick-slider">
                    <div class="slick-list draggable">
                      <div class="slick-track" style="opacity: 1; width: 116px;">
                        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 116px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                          <div>
                            <div class="carousel-inner" style="width: 100%; display: inline-block;">
                              <img class="img-responsive lazyloaded" alt="" src="https://stat.ameba.jp/user_images/20160503/15/korobe11/f5/b6/j/o0480072013635716863.jpg?caw=800">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-information__box">
                  <h3 class="item__titel">
                    城山観光ホテルでのイベント
                  </h3>
                  <h4 class="item__sub-titel"></h4>
                  <p class="item__copy"></p>
                  <a href="https://ameblo.jp/korobe11/entry-12156502146.html" onclick class="btn article__btn">
                    詳しくはこちら
                  </a>
                </div>
              </div>
            </div>
            <hr class="separate__line">
            <div class="anchor" id="event">
              <div class="item__box even">
                <div class="item-image__box">
                  <div class="js-slick slick-initialized slick-slider">
                    <div class="slick-list draggable">
                      <div class="slick-track" style="opacity: 1; width: 116px;">
                        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                          style="width: 116px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                          <div>
                            <div class="carousel-inner" style="width: 100%; display: inline-block;">
                              <img class="img-responsive lazyloaded" alt=""
                                src="https://stat.ameba.jp/user_images/20110308/16/korobe11/d6/85/j/t02200165_0800060011098025384.jpg?caw=800">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-information__box">
                  <h3 class="item__titel">
                    毎月のイベント
                  </h3>
                  <h4 class="item__sub-titel"></h4>
                  <p class="item__copy"></p>
                  <a href="https://ameblo.jp/korobe11/entry-10824428176.html" onclick class="btn article__btn">
                    詳しくはこちら
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </section>
     
    <div class="block" data-structure="b-heading-has-subtitle" data-block-name="見出し(サブタイトル付き)" id="section-64">
      <div class="c-bg-img c-bg-img--cover" data-bg-key="23">
        <div class="c-wrapper u-align-center">
          <div class="p-heading-has-subtitle p-heading__inner">
            <div class="p-heading-has-subtitle__main c-heading c-heading--bdr-btm">
              <h2 data-structure="e-heading" data-custom-pc-fontsize="32px" class=""><span><strong>CONTACT</strong></span></h2>
            </div>
            <div class="p-heading-has-subtitle__sub">
              <div data-structure="e-text"><strong>お問い合わせ</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="s_form_premium block" data-structure="b-form--simple" data-block-name="フォーム(シンプル)" id="section-26">
      <div class="c-bg-img c-bg-img--cover" data-bg-key="24">
        <div class="c-wrapper c-wrapper--sm">
          <div class="c-inner c-inner--lg c-inner--one-elem c-inner--vertical">
            
            <div class="u-mblg u-mbsm--sp">
              <div data-structure="e-text">ご不明点・ご質問や資料請求のご希望などがございましたらお気軽にお問い合わせください。</div>
            </div>
            <div class="p-form-simple c-form m_form">
              <div class="c-inner c-inner--sm c-inner--one-elem">
                
              <form id="customform" method="post" action="" novalidate="true">
                  <div>
                    <div>
                      <label class="col-sm-3 control-label customFormGroup_ttl_required">お名前</label>
                      <div class="col-sm-8 form_inputs">
                        <input class="form-control form_input" name="name" placeholder="サンプル 太郎" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-text">
                      <label class="col-sm-3 control-label customFormGroup_ttl_required">お電話番号</label>
                      <div class="col-sm-8 form_inputs">
                        <input class="form-control form_input" name="phone" placeholder="080-xxxx-xxxx" type="tel" required="required">
                      </div>
                    </div>
                    <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-mail">
                      <label class="col-sm-3 control-label customFormGroup_ttl_required">メールアドレス</label>
                      <div class="col-sm-8 form_inputs">
                        <input class="form-control form_input" name="email" placeholder="xxxx@example.com" type="email" data-input-category-name="mail_address" required="required">
                      </div>
                    </div>
                    <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-checkbox">
                      <label class="col-sm-3 control-label customFormGroup_ttl">ご希望の連絡方法</label>
                      <div class="col-sm-8 form_inputs">
                        <label class="checkbox-inline">
                          <input class="form_input" type="checkbox" name="contact" value="メール" required="required">メール
                        </label>
                        <label class="checkbox-inline">
                          <input class="form_input" type="checkbox" name="contact" value="電話" required="required">電話
                        </label>
                      </div>
                    </div>
                    <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-radio">
                      <label class="col-sm-3 control-label customFormGroup_ttl">性別</label>
                      <div class="col-sm-8 form_inputs">
                        <label class="radio-inline">
                          <input class="form_input" type="radio" name="gender" value="男性">男性
                        </label>
                        <label class="radio-inline">
                          <input class="form_input" type="radio" name="gender" value="女性">女性
                        </label>
                        <label class="radio-inline">
                          <input class="form_input" type="radio" name="gender" value="無回答">無回答
                        </label>
                      </div>
                    </div>
                    <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-select">
                      <label class="col-sm-3 control-label customFormGroup_ttl">年齢</label>
                      <div class="col-sm-8">
                        <select class="form-control form_inputs" name="age">
                          <option class="form_input" value="10代">10代</option>
                          <option class="form_input" value="20代">20代</option>
                          <option class="form_input" value="30代">30代</option>
                          <option class="form_input" value="40代">40代</option>
                          <option class="form_input" value="50代">50代</option>
                          <option class="form_input" value="60代">60代</option>
                          <option class="form_input" value="無回答">無回答</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div data-structure="e-text">お仕事依頼の内容をご記入ください</div>
                    <input type="text" placeholder="お肌に関するアドバイスをしてほしい" name="description" required="required">
                  </div>
                  <div class="u-mtsm">
                    <div data-structure="e-text">プライバシーポリシーをお読みの上、同意して送信して下さい。</div>
                  </div>
                  <a href="privacy.html" target="_blank">プライバシーポリシーはコチラ</a>
                  <div class="u-align-center u-mtmd">
                    <div class="contactAgree">
                      <label><input type="checkbox" name="agree" value="agreement">プライバシーポリシーに同意する</label>
                      <input id="submitButton" type="submit" value="入力内容を確認" name="btn_confirm">
                    </div>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php endif; ?>
   
    <footer>
      <div class="foot_area">
        <ul>
          <li>
            <a href="index.html" class="ga-event" id="link-home-f">HOME</a>
          </li>
          <li>
            <a href="https://rose-3.stores.jp/" target="_blank" class="ga-event" id="link-locations-f">ショップ</a>
          </li>
          <li>
            <a href="recruit.php" class="ga-event" id="link-pt-f">求人</a>
          </li>
          <li>
            <a href="free.php" class="ga-event" id="link-pilates-f">フリーサロン</a>
          </li>
          <li>
            <a href="about.html" class="ga-event" id="link-trainer-f">サロン概要</a>
          </li>
          <li>
            <a href="" class="ga-event" id="link-trainer-f">UARBAN ROSE</a>
          </li>
          <li>
            <a href="reserve.php" class="ga-event" id="link-faq-f">ご予約</a>
          </li>
          <li>
            <a href="lesson.php" class="ga-event" id="link-training-f">お仕事依頼</a>
          </li>
          <li>
            <a href="privacy.html" class="ga-event" id="link-privacy-f">プライバシーポリシー</a>
          </li>
          <li>
            <a href="event.html" class="ga-event" id="link-company-f">イベント情報</a>
          </li>
        </ul>
        <p id="copy">CopyRight 2022 Rose Rose Rose.,LTD. All Rights Reserved.</p>
      </div>
    </footer>  
  </body>
</html>
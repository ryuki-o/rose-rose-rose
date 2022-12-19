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
    <link rel="stylesheet" href="css/reserve.css">
    <title>ご予約 | Rose Rose Rose</title>
    <meta name="google-site-verification" content="xfNzY8aeStBZUZtHtn0MsEsLpp4yKvaJCTk5VQRrXds" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3 sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2 class="pt-2 text-white">Rose Rose Rose</h2>
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
              <a class="nav-link text-white" href="https://rose-rose-rose.stores.jp/" target="_blank">ショップ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="recruit.html">求人</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="free.html">フリーサロン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.html">サロン概要</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="reserve.php">ご予約</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="lesson.html">お仕事依頼</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="event.html">イベント情報</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="page-digest form-page">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">TOP</a>
        </li>
        <li class="active">
          Rose Rose Roseのご予約
        </li>
      </ol>
      <div class="digest-title__box">
        <h2 class="digest-title">Rose Rose Roseのご予約</h2>
      </div>
      <section>
        <div class="concept__box">
          <p class="concept__copy">
            必要事項（※）を入力の上、「入力内容を確認する」を押してください。
            <br>
            ■お客様にご入力いただきます情報は、すべてSSL機能（Secure Socket Layer：情報を暗号化し、プライバシー情報などを安全に送受信する機能）
            によって暗号化され送信されますので、ご安心ください。
            <br>
            ■ご利用1ヶ月前まで当フォームでのリクエストを承ります。1ヶ月前以降は、お電話にてお問い合わせください。
            <br>
            ■キャンセルや変更は必ず24時間前までにお知らせください。ご予約時間の24時間前までにお取消のご連絡がない場合は100%ご返金できかねます。
            <br>
            <br>
            <br>
            ※不定休、完全予約制。
          </p>
        </div>
      </section>

      <?php if( $page_flag === 1 ): ?>

      <h1 style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 25px;">入力内容の確認</h1>

      <form id="f1" method="post" action="conversion.php" style="text-align: center;" accept-charset="shift_jis">
        <div class="element_wrap">
          <label>予約メニュー</label>
          <p><?php echo $_POST['menu1']; ?></p>
          <br>
          <p><?php echo $_POST['menu2']; ?></p>
          <br>
          <p><?php echo $_POST['menu3']; ?></p>
          <br>
          <p><?php echo $_POST['menu4']; ?></p>
          <br>
          <p><?php echo $_POST['menu5']; ?></p>
          <br>
          <p><?php echo $_POST['menu6']; ?></p>
        </div>
        <div class="element_wrap">
          <label>予約希望日</label>
          <p><?php echo $_POST['date']; ?></p>
        </div>
        <div class="element_wrap">
          <label>予約の時間帯</label>
          <p><?php echo $_POST['time']; ?></p>
        </div>
        <div class="element_wrap">
          <label>ご利用人数（女性）</label>
          <p><?php echo $_POST['women']; ?></p>
        </div>
        <div class="element_wrap">
          <label>ご利用人数（男性）</label>
          <p><?php echo $_POST['men']; ?></p>
        </div>
        <div class="element_wrap">
          <label>ご要望・お問合せ</label>
          <p><?php echo $_POST['want']; ?></p>
        </div>
        <div class="element_wrap">
          <label>お申込者名前＜漢字＞</label>
          <p><?php echo $_POST['kanji']; ?></p>
        </div>
        <div class="element_wrap">
          <label>お申込者名前＜カタカナ＞</label>
          <p><?php echo $_POST['kana']; ?></p>
        </div>
        <div class="element_wrap">
          <label>電話番号</label>
          <p><?php echo $_POST['tel']; ?></p>
        </div>
        <div class="element_wrap">
          <label>メールアドレス</label>
          <p><?php echo $_POST['email']; ?></p>
        </div>
        <div class="element_wrap">
          <label>ご利用施設</label>
          <p><?php echo $_POST['place']; ?></p>
        </div>
        
        
        <a href="reserve.php">戻る</a>
        <input type="submit" name="btn_submit" value="予約情報を入力" onclick="submitSJIS();">
        <input type="hidden" name="menu1" value="<?php echo $_POST['menu1']; ?>">
        <input type="hidden" name="menu2" value="<?php echo $_POST['menu2']; ?>">
        <input type="hidden" name="menu3" value="<?php echo $_POST['menu3']; ?>">
        <input type="hidden" name="menu4" value="<?php echo $_POST['menu4']; ?>">
        <input type="hidden" name="menu5" value="<?php echo $_POST['menu5']; ?>">
        <input type="hidden" name="menu6" value="<?php echo $_POST['menu6']; ?>">
        <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
        <input type="hidden" name="time" value="<?php echo $_POST['time']; ?>">

        <input type="hidden" name="women" value="<?php echo $_POST['women']; ?>">
        <input type="hidden" name="men" value="<?php echo $_POST['men']; ?>">
        <input type="hidden" name="want" value="<?php echo $_POST['want']; ?>">
        <input type="hidden" name="kanji" value="<?php echo $_POST['kanji']; ?>">
        <input type="hidden" name="kana" value="<?php echo $_POST['kana']; ?>">
        <input type="hidden" name="tel" value="<?php echo $_POST['tel']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="place" value="<?php echo $_POST['place']; ?>">
        
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
      $auto_reply_subject = 'ご登録ありがとうございます。';

      // 本文を設定
      $auto_reply_text = "この度は、RoseRoseRoseにご予約頂き誠にありがとうございます。
      下記の内容でご予約を受け付けました。\n\n";
      $auto_reply_text .= "予約日時：" . date("Y-m-d H:i") . "\n";
      $auto_reply_text .= "予約メニュー 1：" . $_POST['menu1'] . "\n";
      $auto_reply_text .= "予約メニュー 2：" . $_POST['menu2'] . "\n";
      $auto_reply_text .= "予約メニュー 3：" . $_POST['menu3'] . "\n";
      $auto_reply_text .= "予約メニュー 4：" . $_POST['menu4'] . "\n";
      $auto_reply_text .= "予約メニュー 5：" . $_POST['menu5'] . "\n";
      $auto_reply_text .= "予約メニュー 6：" . $_POST['menu6'] . "\n";
      $auto_reply_text .= "予約希望日：" . $_POST['date'] . "\n";
      $auto_reply_text .= "予約の時間帯：" . $_POST['time'] . "\n";
      $auto_reply_text .= "ご利用人数(女性）：" . $_POST['women'] . "\n";
      $auto_reply_text .= "ご利用人数（男性）：" . $_POST['men'] . "\n";
      $auto_reply_text .= "ご要望・お問い合わせ：" . $_POST['want'] . "\n";
      $auto_reply_text .= "お申込者名前＜漢字＞：" . $_POST['kanji'] . "\n";
      $auto_reply_text .= "お申込者名前＜カタカナ＞：" . $_POST['kana'] . "\n";
      $auto_reply_text .= "電話番号：" . $_POST['tel'] . "\n";
      $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $auto_reply_text .= "ご利用施設：" . $_POST['place'] . "\n\n";
      $auto_reply_text .= "このメールは送信専用ですので、返信されてもご対応できかねます。" . "\n\n";
      $auto_reply_text .= "Rose Rose Rose 事務局";

      $to = $_POST['email'];

      mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $header);

      // 運営側へ送るメールの件名
      $admin_reply_subject = "Rose Rose Roseへのご予約を受け付けました";
      
      // 本文を設定
      $admin_reply_text = "下記の内容で予約がありました。\n\n";
      $admin_reply_text .= "予約日時：" . date("Y-m-d H:i") . "\n";
      $admin_reply_text .= "予約メニュー 1：" . $_POST['menu1'] . "\n";
      $admin_reply_text .= "予約メニュー 2：" . $_POST['menu2'] . "\n";
      $admin_reply_text .= "予約メニュー 3：" . $_POST['menu3'] . "\n";
      $admin_reply_text .= "予約メニュー 4：" . $_POST['menu4'] . "\n";
      $admin_reply_text .= "予約メニュー 5：" . $_POST['menu5'] . "\n";
      $admin_reply_text .= "予約メニュー 6：" . $_POST['menu6'] . "\n";
      $admin_reply_text .= "予約希望日：" . $_POST['date'] . "\n";
      $admin_reply_text .= "予約の時間帯：" . $_POST['time'] . "\n";
      $admin_reply_text .= "ご利用人数(女性）：" . $_POST['women'] . "\n";
      $admin_reply_text .= "ご利用人数（男性）：" . $_POST['men'] . "\n";
      $admin_reply_text .= "ご要望・お問い合わせ：" . $_POST['want'] . "\n";
      $admin_reply_text .= "お申込者名前＜漢字＞：" . $_POST['kanji'] . "\n";
      $admin_reply_text .= "お申込者名前＜カタカナ＞：" . $_POST['kana'] . "\n";
      $admin_reply_text .= "電話番号：" . $_POST['tel'] . "\n";
      $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $admin_reply_text .= "ご利用施設：" . $_POST['place'] . "\n\n";
      // 運営側へメール送信
      mb_send_mail( 'funmon0722@icloud.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>

    <?php elseif( $page_flag === 2 ): ?>

    <p>送信が完了しました。</p>

    <?php else: ?>

      <section class="full-width">
        <hr class="separete__line">
        <div class="container">
          <form class="form-horizontal" action="" method="post">
            <input type="hidden" name="_token" value="">
            <div class="form__box">
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-10">コースメニュー</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <div>
                    <label class="control-label customFormGroup_ttl">
                      A: カウンセリング /30分以上 / 8,000円,<br><br> B: Extraordinary Escape / 所要時間は変動 / 50,000円,<br><br> C: ハンドケア / 1時間 / 4,000円,<br><br>
                      D: Golden Time(Sleeping&Work) / 30分以上 / 1,000円,<br><br> E: Pride Make Lesson / 1時間 / 10,000円,<br><br> F: アイブロウ デザイニング / 所要時間は変動 / 10,000円
                    </label><br><br>
                    <div class="col-sm-8 form_inputs" style="display: flex; justify-content: space-evenly;">
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu1" value="カウンセリング /30分以上 / 8,000円">A
                      </label>
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu2" value="Extraordinary Escape / 所要時間は変動 / 50,000円">B
                      </label>
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu3" value="ハンドケア / 1時間 / 4,000円">C
                      </label>
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu4" value="Golden Time(Sleeping&Work) / 30分以上 / 1,000円">D
                      </label>
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu5" value="Pride Make Lesson / 1時間 / 10,000円">E
                      </label>
                      <label class="radio-inline">
                        <input class="form_input" type="checkbox" name="menu6" value="アイブロウ デザイニング / 所要時間は変動 / 10,000円">F
                      </label>
                    </div>
                  </div>
                  <small class="description">※複数選択可</small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-1">ご予約希望日</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control js-date" name="date" id="form-input-1" type="date" value autocomplete="off">
                  <small class="description">
                    ご利用1ヶ月前まで当フォームのリクエストを承ります。
                    <br>
                    1ヶ月前以降は、お電話にてお問い合わせください。
                  </small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-2">ご予約の時間帯</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="time" id="form-input-2" type="time" value>
                  <small class="description"></small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-3">ご利用人数（女性）</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="women" id="form-input-3" type="number" value>
                  <small class="description">※ご利用者様がいない場合は0とご記入ください。</small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-4">ご利用人数（男性）</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="men" id="form-input-4" type="number" value>
                  <small class="description">※ご利用者様がいない場合は0とご記入ください。</small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-5">ご要望・お問合せ</label>
                </div>
                <div class="form__item-box">
                  <textarea class="form-control" name="want" id="form-input-5" style="height: 103px;"></textarea>
                  <small class="description"></small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-6">お申込者名前＜漢字＞</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="kanji" id="form-input-6" type="text" value>
                  <small class="description"></small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-7">お申込者名前＜カタカナ＞</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="kana" id="form-input-7" type="text" value>
                  <small class="description"></small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-8">電話番号</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="tel" id="form-input-8" type="tel" value>
                  <small class="description"></small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-9">メールアドレス</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <input class="form-control" name="email" id="form-input-9" type="email" value>
                  <small class="description">
                    ＊ご予約可否などをご連絡いたしますので、「@rose-rose-rose.jp」ドメインから送信するメールを
                    ご自身のPCやスマートフォンで受信できるよう、事前に設定をお願いします。
                    <br>
                     ＊受付完了の自動配信メールが届いた時点では、まだご予約は成立しておりませんので、ご注意ください。
                  </small>
                </div>
              </div>
              <div class="form-group__box">
                <div class="form__hader-box">
                  <label class="control-label" for="form-input-10">ご利用施設</label>
                  <span class="text-danger">※</span>
                </div>
                <div class="form__item-box">
                  <div class="input-group">
                    <input name="place" type="radio" id="radio-282-0" value="VIPルーム">
                    <label class="radio-inline" for="radio-282-0">
                      VIPルーム
                    </label>
                    <input name="place" type="radio" id="radio-282-1" value="レンタルサロン">
                    <label class="radio-inline" for="radio-282-1">
                      レンタルサロン
                    </label>
                  </div>
                  <small class="description"></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input id="submitButton" type="submit" name="btn_confirm" value="入力内容を確認する">
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
    
    <?php endif; ?>
   
    <footer>
      <div class="foot_area">
        <ul>
          <li>
            <a href="index.html" class="ga-event" id="link-home-f">HOME</a>
          </li>
          <li>
            <a href="shop.html" class="ga-event" id="link-locations-f">店舗一覧</a>
          </li>
          <li>
            <a href="recruit.html" class="ga-event" id="link-pt-f">求人</a>
          </li>
          <li>
            <a href="free.html" class="ga-event" id="link-pilates-f">フリーサロン</a>
          </li>
          <li>
            <a href="about.html" class="ga-event" id="link-trainer-f">会社概要</a>
          </li>
          <li>
            <a href="reserve.php" class="ga-event" id="link-faq-f">ご予約</a>
          </li>
          <li>
            <a href="lesson.html" class="ga-event" id="link-training-f">お仕事依頼</a>
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
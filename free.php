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
    <link rel="stylesheet" href="css/free.css">
    <link rel="stylesheet" href="css/graph.css">
    <title>フリーサロン | Rose Rose Rose</title>
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

    <?php if( $page_flag === 1 ): ?>

      <h1 style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 25px;">入力内容の確認</h1>

      <form id="f1" method="post" action="conversion.php" style="text-align: center;" accept-charset="shift_jis">
        <div class="element_wrap">
          <label>企業名</label>
          <p><?php echo $_POST['your-name']; ?></p>
        </div>
        <div class="element_wrap">
          <label>担当者様お名前</label>
          <p><?php echo $_POST['name']; ?></p>
        </div>
        <div class="element_wrap">
          <label>お電話番号</label>
          <p><?php echo $_POST['tel']; ?></p>
        </div>
        <div class="element_wrap">
          <label>メールアドレス</label>
          <p><?php echo $_POST['email']; ?></p>
        </div>
        <div class="element_wrap">
          <label>会社ご住所</label>
          <p><?php echo $_POST['textarea']; ?></p>
        </div>
        <div class="element_wrap">
          <label>面貸し希望の職種</label>
          <p><?php echo $_POST['type']; ?></p>
        </div>
        <div class="element_wrap">
          <label>面貸し依頼の内容</label>
          <p><?php echo $_POST['description']; ?></p>
        </div>
        
        
        <a href="free.php">戻る</a>
        <input type="submit" name="btn_submit" value="入力内容を送信" onclick="submitSJIS();">
        <input type="hidden" name="your-name" value="<?php echo $_POST['your-name']; ?>">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="tel" value="<?php echo $_POST['tel']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="textarea" value="<?php echo $_POST['textarea']; ?>">
        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
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
      $auto_reply_text = "この度は、RoseRoseRoseの面貸しサロンに申し込み頂き誠にありがとうございます。
      下記の内容で申し込みを受け付けました。\n\n";
      $auto_reply_text .= "申し込み日時：" . date("Y-m-d H:i") . "\n";
      $auto_reply_text .= "企業名：" . $_POST['your-name'] . "\n";
      $auto_reply_text .= "担当者様お名前：" . $_POST['name'] . "\n";
      $auto_reply_text .= "お電話番号：" . $_POST['tel'] . "\n";
      $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $auto_reply_text .= "会社ご住所：" . $_POST['textarea'] . "\n";
      $auto_reply_text .= "面貸し希望の職種：" . $_POST['type'] . "\n";
      $auto_reply_text .= "面貸し依頼の内容：" . $_POST['description'] . "\n\n";
      $auto_reply_text .= "このメールは送信専用ですので、返信されてもご対応できかねます。" . "\n\n";
      $auto_reply_text .= "Rose Rose Rose 事務局";

      $to = $_POST['email'];

      mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $header);

      // 運営側へ送るメールの件名
      $admin_reply_subject = "Rose Rose Roseの面貸しサロンへの申し込みを受け付けました";
      
      // 本文を設定
      $admin_reply_text = "下記の内容で申し込みがありました。\n\n";
      $admin_reply_text .= "申し込み日時：" . date("Y-m-d H:i") . "\n";
      $admin_reply_text .= "企業名：" . $_POST['your-name'] . "\n";
      $admin_reply_text .= "担当者様お名前：" . $_POST['name'] . "\n";
      $admin_reply_text .= "お電話番号：" . $_POST['tel'] . "\n";
      $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $admin_reply_text .= "会社ご住所：" . $_POST['textarea'] . "\n";
      $admin_reply_text .= "面貸し希望の職種：" . $_POST['type'] . "\n";
      $admin_reply_text .= "面貸し依頼の内容：" . $_POST['description'] . "\n\n";
      // 運営側へメール送信
      mb_send_mail( 'funmon0722@icloud.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>

    <?php elseif( $page_flag === 2 ): ?>

    <p>送信が完了しました。</p>

    <?php else: ?>

    <main id="PAGES_CONTAINER" tabindex="-1">
      <div id="SITE_PAGES" class="_1gF1C">
        <div id="SITE_PAGES_TRANSITION_GROUP" class="_2YGAo">
          <div id="tgmki" class="Ry26q">
            <div class="_3CemL" data-testid="page-bg"></div>
            <div class="_3K7uv">
              <div id="Containertgmki" class="_1KV2M">
                <div data-mesh-id="ContainertgmkiinlineContent" data-testid="inline-content" class>
                  <div data-mesh-id="ContainertgmkiinlineContent-gridContainer" data-testid="mesh-container-content">
                    <!-- <div id="comp-l651ff6x" class="XUUsC" title="">
                      <div data-testid="linkElement" class="XQ_iF">
                        <img src="" alt="" style="width: 980px; height: 733px; object-fit:cover;" fetchpriority="high">
                      </div>
                    </div> -->
                    <section id="comp-l66bthai" class="_3d64y">
                      <div id="bgLayers_comp_l66bthai" data-hook="bgLayers" class="_3wnIc">
                        <div data-testid="colorUnderlay" class="_3KzuS_3SQN-"></div>
                      </div>
                      <div data-testid="columns" class="1uldx">
                        
                      </div>
                    </section>
                    <div id="comp-juopgrqj" class="_2Hij5 _3bcaz" data-testid="richTextElement">
                      <h5 class="font_5" style="line-height: 1.4em; font-size: 23px;">
                        <span style="font-size: 22px;">
                          <span style="font-family: rodin-demi-bold,ms gothic,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,osaka,sans-serif;">
                            - シェアリングの時代 -
                            <br>
                            現在、美容サロンの数はおよそ25万件。
                          </span>
                        </span>
                        <br>
                        <br>
                         &nbsp;
                         <br>
                         <span style="font-size: 15px;">
                          <span style="font-family: rodin-light,ms gothic,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,osaka,sans-serif;">
                            サロンという「箱」だけではなく、個人やチームの美容サロンが共存していくために必要な「働き方」の
                            充実こそが【Rose Rose Rose】の目指す道です。
                            <br>
                            それは、「美」に興味がある方の新たな働き方の形です。
                          </span>        
                         </span>
                      </h5>
                    </div>
                    <div id="comp-l3l4ixer" class="_2Hij5 _3bcaz" data-testid="richTextElement">
                      <h5 class="font_5" style="line-height: 1.4em; font-size: 23px;">
                        <span style="font-size: 22px;">
                          <span style="font-family: rodin-demi-bold,ms gothic,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,osaka,sans-serif;">
                            - 共に育む成長型サロン -
                          </span>
                        </span>
                        <br>
                        <span style="font-size: 22px;">
                          <span style="font-family: rodin-demi-bold,ms gothic pro,osaka,sans-serif;">
                            <span style="color: #000000;">
                              <span style="font-weight: normal;">
                                <span style="font-weight: 400;">
                                  <span style="letter-spacing: normal;">
                                    シェアサロンの目指す姿。
                                  </span>
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                        <br>
                        <br>
                        <span style="font-family: rodin-light,ms gothic,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,osaka,sans-serif;">
                          <span style="color: #000000;">
                            <span style="font-style: normal;">
                              <span style="font-weight: 400;">
                                <span style="font-size: 15px;">
                                  <span style="letter-spacing: normal;">
                                    それは「自分」「仲間」そして「お客様」と、
                                    共に育み成長していけるサロンです。
                                  </span>
                                </span>
                              </span>
                            </span>
                          </span>
                          <br>
                          <span style="color: #000000;">
                            <span style="font-style: normal;">
                              <span style="font-weight: 400;">
                                <span style="font-size: 15px;">
                                  <span style="letter-spacing: normal;">
                                    完成された姿で始まるのではなくシェアサロンに関わるすべての人たちで
                                    共に創り上げる『成長型サロン』。
                                    <br>
                                    新たな価値を創造する「喜び」「楽しさ」「ワクワク感」を共感していける。
                                    そんなサロンであり続けたいと思います。
                                  </span>
                                </span>
                              </span>
                            </span>
                          </span>
                          <br>
                          <br>
                          <span style="color: #000000;">
                            <span style="font-style: normal;">
                              <span style="font-size: 15px;">
                                <span style="letter-spacing: normal;">
                                  この先「美容サロンのあり方」は大きく変わります。
                                  <br>
                                  それは僕らが思っている以上に近い将来、やってくるはずです。
                                  <br>
                                  僕らの考える常識は、時代の流れと共に常識ではなくなるかもしれません。
                                  <br>
                                  目まぐるしく変化する時代においてはなおさらのことです。
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                        <br>
                        <br>
                        <span style="color: #000000;">
                          <span style="font-style: normal;">
                            <span style="font-weight: 400;">
                              <span style="font-size: 15px;">
                                <span style="letter-spacing: normal;">
                                  常に時代を感じ、見極め、想像し、創造すること。
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                        <br>
                        <span style="color: #000000;">
                          <span style="font-style: normal;">
                            <span style="font-weight: 400;">
                              <span style="font-size: 15px;">
                                <span style="letter-spacing: normal;">
                                  きっとそれが「自分らしくエステサロンをする」ための、ヒントなのだと思います。
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                        <br>
                        <h2 style="text-align: center; margin: 20px; font-size: 20px;">初期投資の比較</h2>

                        <!-- css bar graph -->
                        <div class="css_bar_graph">
                          <!-- y_axis labels -->
                          <ul class="y_axis">
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          </ul>
                          
                          <!-- x_axis labels -->
                          <ul class="x_axis">
                            <li>Rose Rose Rose使用料<br>1万円/日</li>
                            <li>美容サロン開業費用<br>1,000万円～1,200万円</li>
                          </ul>
                          
                          <!-- graph -->
                          <div class="graph">
                            <!-- grid -->
                            <ul class="grid">
                              <li><!-- 100 --></li>
                              <li><!-- 80 --></li>
                              <li><!-- 60 --></li>
                              <li><!-- 40 --></li>
                              <li><!-- 20 --></li>
                              <li class="bottom"><!-- 0 --></li>
                            </ul>
                            
                            <!-- bars -->
                            <ul>
                              <li class="bar nr_1 orange" style="height: 75px;"><div class="top"></div><div class="bottom"></div>格安!</li>
                              <li class="bar nr_2 blue" style="height: 225px;"><div class="top"></div><div class="bottom"></li>
                            </ul>	
                          </div>
                        </div>
                        <br>
                        <br>
                        <br>
                         &nbsp;
                      </h5>
                    </div>

                    <div class="l-contents">
                      <div class="l-contents__inner l-inner">
                        <article class="p-entry l-primary">
                          <header class="p-entry l-primary">
                            <h1 class="p-entry__title" style="font-size: 34px; text-align: center;">
                              個人事業者様向け <br> 面貸し依頼フォーム
                            </h1>
                          </header>
                          <div class="p-entry__body">
                            <p>
                              当WEBサイトでは、個人事業者様からのサロン面貸しをご依頼いただくための入り口として、
                              面貸し依頼フォームを設けております。
                              <br>
                              以下のフォームにご明記の上、送信ボタンを押してください。
                            </p>
                            <p>
                              通常、3営業日以内のご返信を差し上げますが1週間経ちましたても返信がない場合は、送信トラブルの可能性がございますので、
                              その際はお手数でございますが、株式会社Rose Rose Rose(090-3322-8029)までお問い合わせくださいませ。
                            </p>
                            <div role="form" class="wpcf7" id="wpcf7-f1176-p1177-o1" lang="ja" dir="ltr">
                              <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                              </div>
                              <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                
                                </div>
                                <p>
                                  <label>
                                    企業名
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                      <input type="text" name="your-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    担当者様お名前
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="text-264">
                                      <input type="text" name="name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    お電話番号
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="tel-248">
                                      <input type="text" name="tel" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    メールアドレス
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                                      <input type="text" name="email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    会社ご住所
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="textarea-591">
                                      <input type="text" name="textarea" value size="100" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    面貸し希望の職種
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="text-266">
                                      <input type="text" name="type" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    面貸し依頼の内容などをご記入ください。
                                    <br>
                                    <span class="wpcf7-form-control-wrap" data-name="textarea-592">
                                      <input type="text" name="description" value size="100" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span>
                                  </label>
                                </p>
                                <p>
                                  <span class="wpcf7-form-control-wrap" data-name="acceptance-503">
                                    <span class="wpcf7-form-control wpcf7-acceptance">
                                      <span class="wpcf7-list-item">
                                        <input type="checkbox" name="acceptance-503" value="1" aria-invalid="false">
                                      </span>
                                    </span>
                                  </span>
                                  内容にお間違いがなければ、チェックをお願いします。
                                </p>
                                <p>
                                  <input type="submit" name="btn_confirm" value="入力内容を確認" class="wpcf7-form-control has-spinner wpcf7-submit">
                                  <span class="wpcf7-spinner">
                
                                  </span>
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                              </form>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>

                    <?php endif; ?>
                    
                    <div id="comp-l3l7xpot" class="_2Hij5 _3bcaz" data-testid="richTextElement">
                      <h5 class="font_5" style="font-size: 23px;">
                        <span style="font-weight: bold;">
                          <span style="font-family: rodin-light,ms gothic,ヒラギノ角ゴ pro w3 hiragino kaku gothic pro,osaka,sans-serif;">
                            <span style="color: #000000;">
                              <span style="font-style: normal;">
                                <span style="font-size: 15px;">
                                  <span style="letter-spacing: normal;">
                                    会社名：株式会社 Rose Rose Rose
                                    <br>
                                     &ZeroWidthSpace;連絡先:090-3322-8029
                                     
                                  </span>
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

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
            <a href="about.html" class="ga-event" id="link-trainer-f">会社概要</a>
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
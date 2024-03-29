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
    <link rel="stylesheet" href="css/about.css">
    <title>採用情報 | Rose Rose Rose</title>
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

    <ol class="breadcrumb">
        <li>
          <a href="index.html">TOP></a>
        </li>
        <li>
          Rose Rose Roseの採用情報
        </li>
    </ol>

    <!-- 写真 -->
    <img src="https://images.unsplash.com/photo-1526045478516-99145907023c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNTgwfDB8MXxzZWFyY2h8NHx8QmVhdXR5JTIwQWR2aXNvcnxlbnwwfHx8fDE2NjkxOTU3NTY&ixlib=rb-4.0.3&q=80&w=400" alt= "" style="width: 400px; height: 200px; margin-bottom: 20px; margin-top: 20px;"/>
    <div style="background: url('{%= kagoshima-city_image %}'); margin-top: 20px;"></div>

    <!-- タイトル -->
    <h1 class="title">Rose Rose Roseは輝く女性を求めています。</h1>
    
    <?php if( $page_flag === 1 ): ?>

      <h1 style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 25px;">入力内容の確認</h1>

      <form id="f1" method="post" action="conversion.php" style="text-align: center;">
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
          <label>年齢</label>
          <p><?php echo $_POST['age']; ?></p>
        </div>
        <div class="element_wrap">
          <label>連絡方法</label>
          <p><?php echo $_POST['contact']; ?></p>
        </div>
        <div class="element_wrap">
          <label>備考</label>
          <p><?php echo $_POST['description']; ?></p>
        </div>
        
        
        <a href="recruit.php">戻る</a>
        <input type="submit" name="btn_submit" value="この求人に応募" onclick="submitSJIS();">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
        <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
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
      $auto_reply_subject = 'ご応募ありがとうございます。';

      // 本文を設定
      $auto_reply_text = "この度は、RoseRoseRoseの求人にご応募頂き誠にありがとうございます。
      下記の内容でご応募を受け付けました。\n\n";
      $auto_reply_text .= "ご応募日時：" . date("Y-m-d H:i") . "\n";
      $auto_reply_text .= "お名前：" . $_POST['name'] . "\n";
      $auto_reply_text .= "電話番号：" . $_POST['phone'] . "\n";
      $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $auto_reply_text .= "年齢：" . $_POST['age'] . "\n";
      $auto_reply_text .= "連絡方法：" . $_POST['contact'] . "\n";
      $auto_reply_text .= "備考：" . $_POST['description'] . "\n\n";
      $auto_reply_text .= "このメールは送信専用ですので、返信されてもご対応できかねます。" . "\n\n";
      $auto_reply_text .= "Rose Rose Rose 事務局";

      $to = $_POST['email'];

      mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $header);

      // 運営側へ送るメールの件名
      $admin_reply_subject = "Rose Rose Roseの求人へのご応募を受け付けました";
      
      // 本文を設定
      $admin_reply_text = "下記の内容で応募がありました。\n\n";
      $admin_reply_text .= "応募日時：" . date("Y-m-d H:i") . "\n";
      $admin_reply_text .= "お名前：" . $_POST['name'] . "\n";
      $admin_reply_text .= "電話番号：" . $_POST['phone'] . "\n";
      $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
      $admin_reply_text .= "年齢：" . $_POST['age'] . "\n";
      $admin_reply_text .= "連絡方法：" . $_POST['contact'] . "\n";
      $admin_reply_text .= "備考：" . $_POST['description'] . "\n\n";
      // 運営側へメール送信
      mb_send_mail( 'funmon0722@icloud.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>

    <?php elseif( $page_flag === 2 ): ?>

    <p>送信が完了しました。</p>

    <?php else: ?>
    
   
    <table data-structure="m-table">
      <tbody class="">
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>業務内容</strong></th>
          <td data-structure="e-td" class="">
            接客販売
            <br>
            在庫管理/付帯業務
            <br>
            顧客管理
            <br>
            トータルなサービスを通し顧客との絆を築く
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>業種・職種</strong></th>
          <td data-structure="e-td" class="">サロンコンシェルジュ・BA（ビューティーアドバイザー）</td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>雇用形態</strong></th>
          <td data-structure="e-td" class="">パート・アルバイト</td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>福利厚生</strong></th>
          <td data-structure="e-td" class="">
            社会保障・結婚/出産祝い金
            <br>
            社内制度　慶弔見舞金制度、英年金奥表彰
            <br>
            社内行事、提携保養施設
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>求人の特徴</strong></th>
          <td data-structure="e-td" class="">
            BAは自分を大事にしているお客様に記憶に残る接客対応を提供します。
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>勤務時間</strong></th>
          <td data-structure="e-td" class="">約7.5時間</td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>休日・休暇</strong></th>
          <td data-structure="e-td" class="">
            年間休日122日
            <br>
            年次有給全額支給
            <br>
            病気休暇・保存休暇・慶弔休暇
            <br>
            看護休暇・産休・産休制度
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>賃金</strong></th>
          <td data-structure="e-td" class="">
            月給20万円以上
            <br>
            昇給改定
            <br>
            賞与年２回　業績賞与年１回
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>諸手当</strong></th>
          <td data-structure="e-td" class="">交通費・時間外手当全額支給</td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>部門</strong></th>
          <td data-structure="e-td" class="">
            セキュリティ/ファシリティ/メンテナンス
            <br>
            ストラテジー/ビジネスディベロップメント
            <br>
            リテール・コーポレート
            <br>
            サプライチェーン・コンポレート
            <br>
            エデュケーション/トレーニング
            <br>
            コーポレート（イメージ・サロン作り）
            <br>
            アドミニストレーション
            <br>
            マーケ
            <br>
            ファイナンス＆アカウンティング
            <br>
            インフォメーションテクノロジー
            <br>
            オンライン/Eコマーズ
            <br>
            リーガル
          </td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>待遇</strong></th>
          <td data-structure="e-td" class="">制服・ユニフォーム支給</td>
        </tr>
        <tr class="" data-elem-name="tr">
          <th data-structure="e-th" class=""><strong>研修制度</strong></th>
          <td data-structure="e-td" class="">
            内定者研修（1～2ヶ月）
            <br>
            ブランドプロダクト・マナー・接客研修
            <br>
            フォローアップ研修/新製品
            <br>
            コレクション研修/タッチアップ（BA）
            <br>
            マネジメント研修/語学研修など
          </td>
        </tr>
      </tbody>
    </table>

        <div style="border-top: solid 5px #5d627b; box-shadow: 0 3px 5px rgba(0, 0, 0, 0.22);">
          <div class="c-bg-img c-bg-img--cover" data-bg-key="7">
            <div class="c-wrapper c-wrapper--sm">
              <div class="c-inner c-inner--lg c-inner--one-elem c-inner--vertical">
                <div class="c-heading c-heading--block-main u-align-center u-mbmd">
                  <h2 style="text-align: center; margin-top: 20px;">
                    <strong>
                      ご応募はこちらから(ENTRY)
                    </strong>
                  </h2>
                </div>
                <div class="u-mblg u-mbsm--sp">
                  <div data-structure="e-text" class="">
                    <div style="text-align: center;" data-mce-style="text-align: center;">
                      ご応募の内容を確認次第、担当者から連絡させていただきます。
                    </div>
                  </div>
                </div>
                <div class="p-form-simple c-form m_form">
                  <div class="c-inner c-inner--sm c-inner--one-elem">
                    <form class="" id="customform" method="post" action="">
                      <div class="" data-pera1-type="custom_form">
                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-text">
                          <label class="col-sm-3 control-label customFormGroup_ttl_required">お名前</label>
                          <div class="col-sm-8 form_inputs">
                            <input class="form-control form_input" name="name" placeholder="サンプル 太郎" required="required" type="text">
                          </div>
                        </div>
                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-text">
                          <label class="col-sm-3 control-label customFormGroup_ttl_required">お電話番号（ハイフンなどで区切らず入力してください）</label>
                          <div class="col-sm-8 form_inputs">
                            <input class="form-control form_input" name="phone" placeholder="080xxxxxxxx" required="required" type="tel" maxlength="11">
                          </div>
                        </div>
                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-mail">
                          <label class="col-sm-3 control-label customFormGroup_ttl_required">メールアドレス</label>
                          <div class="col-sm-8 form_inputs">
                            <input class="form-control form_input" name="email" placeholder="xxxx@example.com" type="email" required="required">
                          </div>
                          <input type="hidden" value="メールアドレス" name="system[replyToKey]">
                        </div>
                        
                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-select">
                          <label class="col-sm-3 control-label customFormGroup_ttl">年齢（任意）</label>
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

                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-radio">
                          <label class="col-sm-3 control-label customFormGroup_ttl_required">ご希望の連絡方法</label>
                          <div class="col-sm-8 form_inputs" style="display: flex; justify-content: space-evenly;">
                            <label class="radio-inline">
                              <input class="form_input" type="radio" name="contact" value="電話" required="required">電話
                            </label>
                            <label class="radio-inline">
                              <input class="form_input" type="radio" name="contact" value="メール" required="required">メール
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-group" data-elem-name="formInputCustomText" data-structure="e-form-text">
                          <label class="col-sm-3 control-label customFormGroup_ttl">備考（業務経験・資格について書ける方はこちらに詳細を記入してください。）（任意）</label>
                          <div class="col-sm-8 form_inputs">
                            <input class="form-control form_input" name="description" placeholder="" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="u-align-center u-mtmd">
                        <div class="form-group">
                          <input class="form-control" id="formLandingPageId" type="hidden" value="863106" name="landing_page_id">
                          
                          <div style="text-align: center;">
                            <input class="button" name="btn_confirm" type="submit" style="margin: 20px;" value="入力内容を確認">
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
            <a href="https://rose-3.stores.jp/" class="ga-event" id="link-locations-f">ショップ</a>
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
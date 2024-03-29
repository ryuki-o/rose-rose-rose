

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
    <title>ご予約完了 | Rose Rose Rose</title>
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

    <input type="hidden" name="menu1" value="<?php echo $_POST['menu1']; ?>">
    <input type="hidden" name="menu2" value="<?php echo $_POST['menu2']; ?>">
    <input type="hidden" name="menu3" value="<?php echo $_POST['menu3']; ?>">
    <input type="hidden" name="menu4" value="<?php echo $_POST['menu4']; ?>">
    <input type="hidden" name="menu5" value="<?php echo $_POST['menu5']; ?>">
    <input type="hidden" name="menu6" value="<?php echo $_POST['menu6']; ?>">
    <main class="page-digest form-page">
      <div class="text-center my-5">
          <h1 class="mb-5">※まだご予約は確定しておりません。</h1>
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
          <p class="salon_btn">
            <a class="" href="https://rose-3.stores.jp/">こちらから商品を購入</a>
          </p>
          <p class="mb-2">商品を購入後よりご予約が確定されますので、ご注意ください。</p>
          <p class="mb-4">お客様のご利用をスタッフ一同心よりお待ちしております。</p>
      </div>
    </main>
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
<style>


*,
*::before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}

.btn,
a.btn,
button.btn {
  background-color: #9f000c;
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #fff;
  border-radius: 0.5rem;
}

a.btn--red.btn--cubic {
  border-radius: 5px solid #9f000c;
}

a.btn--red.btn--cubic:hover {
  margin-top: 3px;
  border-bottom: 2px solid #9f000c;
}

a.btn--radius {
  border-bottom: 100vh;
}

.fa-position-right {
  position: absolute;
  top: calc(50% - .5em);
  right: 1rem;
}

</style>
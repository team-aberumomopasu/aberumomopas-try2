<?php

include("./config/link.php");


?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="動物虐待のない世界を目指しています。d" />
  <title>ANIMAL POLICE FUKUOKA</title>
  <link rel="icon" type="image/x-icon" href="assets/fav.svg" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

  <!-- OGPTwitterシェアとかで表示されるよ -->

  <meta property="og:url" content="ページのURL" />
  <meta property="og:title" content="ANIMAL POLICE FUKUOKA" />
  <meta property="og:type" content="websit">
  <meta property="og:description" content="記事の抜粋" />
  <meta property="og:image" content="画像のURL" />
  <meta name="twitter:card" content="Summary Card" />
  <meta name="twitter:site" content="@Twitterユーザー名" />
  <meta property="og:site_name" content="サイト名" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="fb:app_id" content="appIDを入力" />
</head>

<body>
  <header>
    <h1 class="site-heading text-center text-faded d-none d-lg-block">
      <!-- <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span> -->
      <span class="site-heading-lower">ANIMAL POLICE FUKUOKA</span>
    </h1>
  </header>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 sticky-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">ANIMAL POLICE FUKUOKA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">ホーム</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/activity.php">活動報告</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/donate.php">寄付•グッズ</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/transfer.php">譲渡会</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/contact.php">お問合わせ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Aboutus</span>
            <span class="section-heading-lower">わたしたち</span>
          </h2>
          <p class="mb-4">動物虐待のない世界を目指しています</p>
          <div class="intro-button mx-auto"><a class="btn btn-dark btn-lg" href="#!">くわしくみる</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Our Promise</span>
              <span class="section-heading-lower">To You</span>
            </h2>
            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with
              friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest
              quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make
              things right!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2021</p>
    </div>
    <!-- <footer class="mt-auto text-white-50"> -->
    <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

    <a href="<?= link_login ?>">管理者ログイン</a>
    <!-- 管理者権限を持った人しか使わないボタン -->

    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>

  <div id="message"></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

  <!-- noteの取得 -->
  <script>
    // HTMLドキュメントの解析後に実行
    window.addEventListener('DOMContentLoaded', function() {
      // XMLHttpRequestのインスタンスを作成
      let req = new XMLHttpRequest();

      // 読み込み時の処理を設定
      req.onreadystatechange = function() {
        // readyState=4は全てのデータを受信済み、
        // status=200は正常に処理されたことを意味します
        if (req.readyState == 4 && req.status == 200) {
          // 結果を代入
          document.getElementById("message").innerHTML = req.responseText;
        }
      }

      // 接続先のURLやメソッドを設定します
      req.open("GET", "config/note.php");

      // リクエストをサーバに送信
      req.send();

    })
  </script>
</body>

</html>
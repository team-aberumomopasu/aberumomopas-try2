<?php

include("./config/link.php");


?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="動物虐待のない世界を目指しています。d" />
  <title>ANIMAL POLICE FUKUOKA</title>
  <link rel="icon" type="image/x-icon" href="assets/fav.svg" />
  <!-- マテリアル -->
  <link href="https://fonts.googleapis.com/css?family=Material+Rounded" rel="stylesheet">

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



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

  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">ホーム<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://note.com/animal_police/">活動報告</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitor/contact.php">お問い合わせ</a>
        </li>
        <!-- ドロップダウンタイプ -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            里親
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="visitor/transfer.php">譲渡会</a>
            <a class="dropdown-item" href="#">卒業生</a>
            <a class="dropdown-item" href="#">注意点</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>


  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/top.jpg" alt="..." />

        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Aboutus</span>
            <span class="section-heading-lower">わたしたち</span>
          </h2>
          <p class="mb-4">動物虐待のない世界を目指しています</p>
        </div>

      </div>
    </div>
  </section>


  <div class="container">
    <h2 class="section-heading mb-4">
      <span class="section-heading-upper">Aboutus</span>
      <span class="section-heading-lower">活動報告</span>
    </h2>


  </div>
  <div>
    <div id="message" class="p-2 bd-highlight"> </div>
  </div>

  <div class="intro-button mx-auto"><a class="btn btn-dark btn-lg" href="https://note.com/animal_police/">くわしくみる</a></div>


  <footer class="footer text-faded text-center py-5">

    <!-- <footer class="mt-auto text-white-50"> -->
    <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

    <a href="<?= link_login ?>">管理者ログイン</a>
    <!-- 管理者権限を持った人しか使わないボタン -->

  </footer>






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

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"> -->
  <!-- </script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
  </script>

</body>

</html>

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
  <link href="css/styles.css" rel="stylesheet" />

  <!-- Font Awesome icons (free version)-->
  <!-- <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Material+Rounded" rel="stylesheet">
  <!-- Google fonts-->

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->

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
  <header class="site-header">
    <div class="wrapper site-header__wrapper">
      <div class="site-header__start">
        <a href="#" class="brand">ANIMAL POLICE FUKUOKA</a>

      </div>

      <div class="site-header__end">
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button">
            menu
          </button>
          <ul class="nav__wrapper">
            <li class="nav__item active">
              <a href="#">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="nav-icon" focusable="false" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22,9.45,12.85,3.26A1.52,1.52,0,0,0,12,3a1.49,1.49,0,0,0-.84.26L2,9.45,3.06,11,4,10.37V20a1,1,0,0,0,1,1h5V16h4v5h5a1,1,0,0,0,1-1V10.37l.94.63Z" class="active-item" style="fill-opacity: 1"></path>
                  <path d="M22,9.45L12.85,3.26a1.5,1.5,0,0,0-1.69,0L2,9.45,3.06,11,4,10.37V20a1,1,0,0,0,1,1h6V16h2v5h6a1,1,0,0,0,1-1V10.37L20.94,11ZM18,19H15V15a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1v4H6V8.89l6-4,6,4V19Z" class="inactive-item" style="fill: currentColor"></path>
                </svg>
                <span>Home</span>
              </a>
            </li>
            <li class="nav__item">
              <a href="#">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="nav-icon" focusable="false" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16,17.85V20a1,1,0,0,1-1,1H1a1,1,0,0,1-1-1V17.85a4,4,0,0,1,2.55-3.73l2.95-1.2V11.71l-0.73-1.3A6,6,0,0,1,4,7.47V6a4,4,0,0,1,4.39-4A4.12,4.12,0,0,1,12,6.21V7.47a6,6,0,0,1-.77,2.94l-0.73,1.3v1.21l2.95,1.2A4,4,0,0,1,16,17.85Zm4.75-3.65L19,13.53v-1a6,6,0,0,0,1-3.31V9a3,3,0,0,0-6,0V9.18a6,6,0,0,0,.61,2.58A3.61,3.61,0,0,0,16,13a3.62,3.62,0,0,1,2,3.24V21h4a1,1,0,0,0,1-1V17.47A3.5,3.5,0,0,0,20.75,14.2Z" class="inactive-item" style="fill-opacity: 1"></path>
                  <path d="M20.74,14.2L19,13.54V12.86l0.25-.41A5,5,0,0,0,20,9.82V9a3,3,0,0,0-6,0V9.82a5,5,0,0,0,.75,2.63L15,12.86v0.68l-1,.37a4,4,0,0,0-.58-0.28l-2.45-1V10.83A8,8,0,0,0,12,7V6A4,4,0,0,0,4,6V7a8,8,0,0,0,1,3.86v1.84l-2.45,1A4,4,0,0,0,0,17.35V20a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V17.47A3.5,3.5,0,0,0,20.74,14.2ZM16,8.75a1,1,0,0,1,2,0v1.44a3,3,0,0,1-.38,1.46l-0.33.6a0.25,0.25,0,0,1-.22.13H16.93a0.25,0.25,0,0,1-.22-0.13l-0.33-.6A3,3,0,0,1,16,10.19V8.75ZM6,5.85a2,2,0,0,1,4,0V7.28a6,6,0,0,1-.71,2.83L9,10.72a1,1,0,0,1-.88.53H7.92A1,1,0,0,1,7,10.72l-0.33-.61A6,6,0,0,1,6,7.28V5.85ZM14,19H2V17.25a2,2,0,0,1,1.26-1.86L7,13.92v-1a3,3,0,0,0,1,.18H8a3,3,0,0,0,1-.18v1l3.72,1.42A2,2,0,0,1,14,17.21V19Zm7,0H16V17.35a4,4,0,0,0-.55-2l1.05-.4V14.07a2,2,0,0,0,.4.05h0.2a2,2,0,0,0,.4-0.05v0.88l2.53,1a1.5,1.5,0,0,1,1,1.4V19Z" class="active-item" style="fill: currentColor"></path>
                </svg>
                <span>My Network</span>
              </a>
            </li>
            <li class="nav__item">
              <a href="#">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="nav-icon" focusable="false" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2,13H22v6a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V13ZM22,8v4H2V8A1,1,0,0,1,3,7H7V6a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3V7h4A1,1,0,0,1,22,8ZM15,6a1,1,0,0,0-1-1H10A1,1,0,0,0,9,6V7h6V6Z" class="inactive-item" style="fill-opacity: 1"></path>
                  <path d="M21,7H17V6a3,3,0,0,0-3-3H10A3,3,0,0,0,7,6V7H3A1,1,0,0,0,2,8V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8A1,1,0,0,0,21,7ZM9,6a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V7H9V6ZM20,18H4V13H20v5Zm0-6H4V9H20v3Z" class="active-item" style="fill: currentColor"></path>
                </svg>
                <span>Jobs</span>
              </a>
            </li>
            <li class="nav__item">
              <a href="#">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="nav-icon" focusable="false" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21,8H8A1,1,0,0,0,7,9V19a1,1,0,0,0,1,1H18l4,3V9A1,1,0,0,0,21,8Zm-4,8H12V15h5Zm1-3H11V12h7ZM17,4V6H6A1,1,0,0,0,5,7v8H3a1,1,0,0,1-1-1V4A1,1,0,0,1,3,3H16A1,1,0,0,1,17,4Z" class="inactive-item" style="fill-opacity: 1"></path>
                  <path d="M21,8H8A1,1,0,0,0,7,9V19a1,1,0,0,0,1,1H18l4,3V9A1,1,0,0,0,21,8ZM20,19.11L18.52,18H9V10H20v9.11ZM12,15h5v1H12V15ZM4,13H5v2H3a1,1,0,0,1-1-1V4A1,1,0,0,1,3,3H16a1,1,0,0,1,1,1V6H15V5H4v8Zm14,0H11V12h7v1Z" class="active-item" style="fill: currentColor"></path>
                </svg>
                <span>Messaging</span>
              </a>
            </li>
            <li class="nav__item">
              <a href="#">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="nav-icon" focusable="false" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.94,14H5.06L5.79,8.44A6.26,6.26,0,0,1,12,3h0a6.26,6.26,0,0,1,6.21,5.44Zm2,5-1.71-4H4.78L3.06,19a0.71,0.71,0,0,0-.06.28,0.75,0.75,0,0,0,.75.76H10a2,2,0,1,0,4,0h6.27A0.74,0.74,0,0,0,20.94,19Z" class="inactive-item" style="fill-opacity: 1"></path>
                  <path d="M20.94,19L19,14.49s-0.41-3.06-.8-6.06A6.26,6.26,0,0,0,12,3h0A6.26,6.26,0,0,0,5.79,8.44L5,14.49,3.06,19a0.71,0.71,0,0,0-.06.28,0.75,0.75,0,0,0,.75.76H10a2,2,0,1,0,4,0h6.27A0.74,0.74,0,0,0,20.94,19ZM12,4.75h0a4.39,4.39,0,0,1,4.35,3.81c0.28,2.1.56,4.35,0.7,5.44H7L7.65,8.56A4.39,4.39,0,0,1,12,4.75ZM5.52,18l1.3-3H17.18l1.3,3h-13Z" class="active-item" style="fill: currentColor"></path>
                </svg>
                <span>Notifications</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- Header End -->
  <!-- <header id="top-head">
    <div class="inner">
      <div id="mobile-head">
        <h1 class="logo">ANIMAL POLICE FUKUOKA</h1>
        <div id="nav-toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <nav id="global-nav">
        <ul>
          <li><a href="index.php">ホーム</a></li>
          <li><a href="https://note.com/animal_police/">活動報告</a></li>
          <li><a href="visitor/contact.php">お問い合わせ</a></li>
          <li><a href="visitor/transfer.php">譲渡会</a></li>
        </ul>
      </nav>
    </div>
  </header> -->




  <div class="container">

    <h2 class="section-heading mb-4">
      <span class="section-heading-upper">Aboutus</span>
      <span class="section-heading-lower">わたしたち</span>
    </h2>
    <p class="mb-4">動物虐待のない世界を目指しています</p>
  </div>



  <div class="container">
    <h2 class="section-heading mb-4">
      <span class="section-heading-upper">Aboutus</span>
      <span class="section-heading-lower">活動報告</span>
    </h2>


  </div>
  <div>
    <div id="message" class="p-2 bd-highlight"> </div>
  </div>

  <div class="intro-button mx-auto"><a class="btn btn-dark btn-lg" href="https://note.com/animal_police/">くわしくみる</a>
  </div>


  <footer class="footer text-faded text-center py-5">

    <!-- <footer class="mt-auto text-white-50"> -->
    <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

    <a href="<?= link_login ?>">管理者ログイン</a>
    <!-- 管理者権限を持った人しか使わないボタン -->

  </footer>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    let navToggle = document.querySelector(".nav__toggle");
    let navWrapper = document.querySelector(".nav__wrapper");

    navToggle.addEventListener("click", function() {
      if (navWrapper.classList.contains("active")) {
        this.setAttribute("aria-expanded", "false");
        this.setAttribute("aria-label", "menu");
        navWrapper.classList.remove("active");
      } else {
        navWrapper.classList.add("active");
        this.setAttribute("aria-label", "close menu");
        this.setAttribute("aria-expanded", "true");
      }
    });

    let searchToggle = document.querySelector(".search__toggle");
    let searchForm = document.querySelector(".search__form");

    searchToggle.addEventListener("click", showSearch);

    function showSearch() {
      searchForm.classList.toggle("active");
    }
  </script>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"> -->
  <!-- </script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"> -->
  <!-- </script> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"> -->
  <!-- </script> -->



</body>

</html>

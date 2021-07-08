<?php
include("../functions.php");
include("../config/link.php");
$pdo = connect_to_db();

$sql = "SELECT * FROM Transfer_table ORDER BY id DESC";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    // $output .= '<div>';
    $output .= '<div class="inu_box">';
    $output .= '<div>';
    $output .= "<img class='inu_img' src='../admin/transfer/{$record["image"]}' height=200px >";
    $output .= "</div>";
    $output .= "<div class='inu_text'>";
    $output .= "<p>名前:{$record["dogName"]}</p>";
    $output .= "<p>年齢:推定 {$record["dogAge"]}歳</p>";
    if ($record["sex"] == "オス") {
      $output .= "<p><span class='material-icons' id='female'>female</span></p>";
    } else {
      $output .= "<p><span class='material-icons' id='male'>male</span></p>";
    }
    $output .= "<p>避妊去勢手術:{$record["con_cas"]}</p>";
    $output .= "<p>フィラリア検査:{$record["firaria"]}</p>";
    $output .= "<p>犬種:{$record["dogBreed"]}</p>";
    $output .= "<p>持病:{$record["sick"]}</p>";
    $output .= "<p>性格:</p>";
    $output .= "<p>{$record["personality"]}</p>";
    $output .= "</div>";
    $output .= "</div>";
    // $output .= "</div>";
  }
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="動物虐待のない世界を目指しています">
  <meta name="viewport" content="width=device-width">
  <title>譲渡会</title>
  <link rel="stylesheet" media="all" href="css/apf_style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
  <link rel="stylesheet" href="../css/transfer.css">
</head>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
  $(function() {

    let
      winW = $(window).width(),
      winH = $(window).height(),
      nav = $('#mainnav ul a'),
      curPos = $(this).scrollTop();

    if (winW > 880) {
      let headerH = 20;
    } else {
      let headerH = 60;
    }

    $(nav).on('click', function() {
      nav.removeClass('active');
      let $el = $(this),
        id = $el.attr('href');
      $('html, body').animate({
        scrollTop: $(id).offset().top - headerH
      }, 500);
      $(this).addClass('active');
      if (winW < 880) {
        $('#menuWrap').next().slideToggle();
        $('#menuBtn').removeClass('close');
      }
      return false;
    });

    $('.panel').hide();
    $('#menuWrap').toggle(function() {
        $(this).next().slideToggle();
        $('#menuBtn').toggleClass('close');
      },
      function() {
        $(this).next().slideToggle();
        $('#menuBtn').removeClass('close');
      });

  });
</script>

<body id="top">
  <div id="wrapper">

    <div id="sidebar">
      <div id="sidebarWrap">
        <h1 id="sidebar_title">ANIMAL POLICE FUKUOKA</h1>
        <nav id="mainnav">
          <p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
          <div class="panel">
            <ul>
              <li><a href="../index.php"><span class="material-icons">
                    home
                  </span>ホーム</a></li>
              <li><a href="#sec01">
                  <span class="material-icons">
                    info
                  </span>
                  里親希望の方へ</a>
              </li>
              <li><a href="#sec02"><span class="material-icons">
                    flag
                  </span>次の譲渡会</a></li>
              <li><a href="#sec03">
                  <span class="material-icons">
                    place
                  </span>会場案内</a></li>
              <li><a href="#sec04"><span class="material-icons">
                    health_and_safety
                  </span>保護中の子たち</a></li>
              <li><a href="#sec05">
                  <span class="material-icons">
                    flight
                  </span>卒業生</a></li>
            </ul>
            <!-- <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">ホーム</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/activity.php">活動報告</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/donate.php">寄付•グッズ</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/transfer.php">譲渡会</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/contact.php">お問合わせ</a></li> -->
            </ul>
            <ul id="sns">
              <!-- <li><a href="#" target="_blank"><img src="images/iconFb.png" width="20" height="20" alt="FB"></a></li> -->
              <li><a id="logo_twitter" href="#" target="_blank"><img src="../images/logo_Twitter.svg" width="30" height="30" alt="twitter"></a>
              </li>
              <li><a id="logo_note" href="https://note.com/animal_police" target="_blank"><img src="../images/logo_note.png" width="50" height="50" alt="note"></a></li>
              <li><a id="logo_youtube" href="https://www.youtube.com/channel/UCsIFu-o1KP0ETTCrEUw36fw" target="_blank"><img src="../images/logo_youtube2.png" width="30" height="30" alt="You Tube"></a></li>
            </ul>


          </div>
        </nav>
      </div>
    </div>

    <!-- ここまでサイドバー -->
    <!-- <a href="<?= link_index ?>">TOP</a>
      <a href="<?= link_about ?>">はじめに</a>
      <a href="<?= link_activity ?>">活動報告</a>
      <a href="<?= link_signature ?>">ネット署名</a>
      <a href="<?= link_donate ?>">寄付•グッズ</a>
      <a href="<?= link_contact ?>">コンタクト</a>
      <a href="<?= link_SOS ?>">S0S</a> -->


    <div id="content">
      <p id="mainImg"><img src="../images/transfer_top.jpg" alt="dog"></p>
      <!-- 01 里親希望の方へ-->

      <section id="sec01">
        <header>
          <h2><span class="title">里親希望の方へ</span></h2>
        </header>
        <div class="innerS">
          <p>
            譲渡会でお気に入りの仔が見つかったら、その後ご自宅で
            ２週間お世話をしていただきます。
            双方に問題がないようでしたら、正式に譲渡となります。
          </p>

          <div class="masseage_parent">
            <p class="masseage_sub_title">
              <span class="material-icons">
                favorite
              </span>愛情をもって
            </p>
            <p>
              一生涯家族の一員として責任と愛情を持ってくださる方、最期まで看取る覚悟のある方に限ります
            </p>

          </div>

          <div class="masseage_parent">

            <p class="masseage_sub_title">
              <span class="material-icons">
                edit
              </span>
              同意書の記入
            </p>
            譲渡、マッチング前には同意書への記入が必要です。
            </p>
            <p>
              必ず身分証をお持ちください
            </p>
          </div>

          <div class="masseage_parent">
            <p class="masseage_sub_title">
              <span class="material-icons">
                priority_high
              </span>
              注意事項
            </p>
            <p>
              わんちゃん、ねこちゃんの体調の変化により急遽欠席させていただく事もございます。
            </p>
          </div>

        </div>
      </section>

      <!-- // 01里親希望の方へ -->

      <!-- 02譲渡会 -->
      <section id="sec02">
        <header>
          <h2><span class="title">次の譲渡会</span></h2>
        </header>
        <div class="innerS">
          <p>
            譲渡会は毎月第２日曜日に行っております
          </p>
        </div>
        <div class="innerS">
          <div class="inu_big_box">
            <?= $output ?>
          </div>
        </div>

      </section>

      <!-- //02譲渡会 -->

      <!-- 03会場案内 -->
      <section id="sec03">
        <header>
          <h2><span class="title">会場案内</span></h2>
        </header>
        <div class="innerS">
          <ul class="col2">
            <li>
              <p>〒201-1071<br>福岡県福岡市中央区区にこにこ町1-2-999</p>
              <p>実施時間 10:00〜20:00（水曜定休）</p>
            </li>
            <li>
              <div id="map">
                <!-- GOOGLE MAP -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6647.1822509942!2d130.40242577773242!3d33.58996382293685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419185d8270707%3A0xd77996b98281d785!2z44K744Kk44Ot44Oz!5e0!3m2!1sja!2sjp!4v1625627470292!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <!-- // GOOGLE MAP -->
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!--// 03会場案内 -->

      <!-- // BRAND -->
      <!-- PROJECT -->
      <section id="sec04">
        <header>
          <h2><span class="title">保護中の子たち</span></h2>
        </header>
        <div class="innerS">
          <p>工事中</p>
        </div>
      </section>
      <!-- // PROJECT -->
      <!-- COMPANY -->

      <section id="sec05">
        <header>
          <h2><span class="title">卒業生</span></h2>
        </header>
        <div class="innerS">
          <p>

          </p>

          <div class="masseage_parent">
            <p class="masseage_sub_title">
              無事に里親さんが見つかりました
            </p>
            <p>
              これまでに〇〇匹の仔たちが、ここから新しい家族を見つけました！
            </p>

          </div>



        </div>
      </section>

      <!-- // COMPANY -->

      <footer id="footer">

        <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

        <!-- 管理者権限を持った人しか使わないボタン -->
        <a href="<?= link_login ?>">管理者ログイン</a>
        <p>
          Copyright(c) 2016 Sample Inc. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank">http://f-tpl.com</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
        </p>
      </footer>

    </div>


</body>


</html>
<?php
include("./config/link.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANIMAL POLICE</title>
  <link rel="stylesheet" href="#">
</head>

<body>
  <a href="<?= link_about ?>">はじめに</a>
  <a href="<?= link_activity ?>">活動報告</a>
  <a href="<?= link_signature ?>">ネット署名</a>
  <a href="<?= link_transfer ?>">譲渡会</a>
  <a href="<?= link_donate ?>">寄付•グッズ</a>
  <a href="<?= link_contact ?>">コンタクト</a>
  <a href="<?= link_SOS ?>">S0S</a>

  <h1>ANIMAL</h1>
  <h1>POLICE</h1>
  <h1>FUKUOKA</h1>

  <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

  <a href="<?= link_login ?>">管理者ログイン</a>
  <!-- 管理者権限を持った人しか使わないボタン -->

</body>

</html>
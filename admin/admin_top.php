<?php
session_start();
include("../config/link.php");
check_session_id();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANIMAL POLICE管理者top画面</title>
</head>

<body>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="<?= link_admin_all ?>">管理者一覧</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_transfer_read ?>">譲渡会（編集）</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

</body>

</html>
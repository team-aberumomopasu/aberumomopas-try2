<?php
include("../../config/link.php");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン失敗</title>
</head>

<body>
  <h2>ログインに失敗しました</h2>
  <a href="<?= link_login ?>">管理者ログイン</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
</body>

</html>
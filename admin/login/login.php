<?php
include("../../config/link.php");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者ログイン画面</title>
</head>

<body>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <form action="login_act.php" method="POST">

    <h2>管理者ログイン画面</h2>
    <div>
      username: <input type="text" name="username">
    </div>
    <div>
      password: <input type="text" name="password">
    </div>
    <div>
      <button>Login</button>
    </div>

  </form>

</body>

</html>
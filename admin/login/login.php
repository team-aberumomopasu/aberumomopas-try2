<?php
include("../../config/link.php");
?>

<!DOCTYPE html>

<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../css/styles.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者ログイン画面</title>
</head>


<form class="container" action="login_act.php" method="POST">

  <h2 class="text-success p-2">管理者ログイン画面</h2>

  <div class="form-group p-2">
    <label for="formGroupExampleInput">ユーザー名</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ジーズはなこ" name="username">
  </div>

  <div class="form-group p-2">
    <label for="formGroupExampleInput2">パスワード</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
  </div>

  <div>
    <button class="btn btn-outline-success p-2 m-lg-3">ログインする</button>
  </div>

  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>

</form>
</script>

</body>

</html>

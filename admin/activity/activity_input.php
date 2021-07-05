<?php
session_start();
include("../../config/link.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>活動報告（編集）</title>
</head>

<body>
  <a href="<?= link_admin_top ?>">管理者TOP</a>
  <a href="<?= link_activity_read ?>">活動報告</a>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_transfer_read ?>">譲渡会（編集）</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <h1>活動報告（編集）</h1>
  <form method="post" action="activity_create.php" enctype="multipart/form-data">

    <div>
      写真(image):<input type="file" name="upfile" accept="image/*" capture="camera">
    </div>
    <div>
      日付(date): <input type="date" name="date">
    </div>
    <div>
      タイトル(title): <input type="text" name="title">
    </div>
    <div>
      記事(article): <textarea name="article" rows="10" cols="40"></textarea>
    </div>
    <div>
      <button>登録</button>
    </div>
  </form>

</body>

</html>
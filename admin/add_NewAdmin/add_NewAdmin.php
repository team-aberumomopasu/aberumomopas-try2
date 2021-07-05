<?php
session_start();
include("../../config/link.php");
check_session_id();

if ($_SESSION["is_admin"] == 0) {
  exit('Error:権限がありません');
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者追加画面</title>
</head>

<body>
  <a href="<?= link_admin_top ?>">管理者TOP</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_transfer_read ?>">譲渡会（編集）</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <form action="<?= link_add_NewAdmin_act ?>" method="POST">
    <h2>管理者追加画面</h2>
    <div>
      ユーザー名 <input type="text" name="username">
    </div>
    <div>
      パスワード <input type="text" name="password">
    </div>
    <div>
      権限設定
      <select type="text" name="admin">
        <option value="">選択</option>
        <option value="0">一部機能の制限</option>
        <option value="1">フルコントロール</option>
      </select>
    </div>
    <div>
      <button>追加</button>
    </div>
  </form>

</body>

</html>
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
  <title>譲渡会(新規登録)</title>
</head>

<body>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="<?= link_transfer_read ?>">譲渡会（一覧）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <form method="post" action="transfer_create.php" enctype="multipart/form-data">
    <div>
      写真(image):<input type="file" name="upfile" accept="image/*" capture="camera">
    </div>
    <div>
      名前(dogName): <input type="text" name="dogName">
    </div>
    <div>
      犬種(dogBreed): <input type="text" name="dogBreed">
    </div>
    <div>
      推定年齢(dogAge): <input type="text" name="dogAge">
    </div>
    <div>
      性別(sex):
      <select type="text" name="sex">
        <option value="">選択</option>
        <option value="オス">♂</option>
        <option value="メス">♀</option>
      </select>
    </div>
    <div>
      避妊去勢(con-cas):
      <select type="text" name="con_cas">
        <option value="">選択</option>
        <option value="実施済み">実施済み</option>
        <option value="未実施">未実施</option>
      </select>
    </div>
    <div>
      フィラリア(firaria):
      <select type="text" name="firaria">
        <option value="">選択</option>
        <option value="陽性">陽性</option>
        <option value="陰性">陰性</option>
      </select>
    </div>
    <div>
      持病(sick): <input type="text" name="sick">
    </div>
    <div>
      性格(personality): <textarea name="personality" rows="10" cols="40"></textarea>
    </div>
    <div>
      譲渡(transfer):
      <select type="text" name="transfer">
        <option value="">選択</option>
        <option value="未譲渡">未譲渡</option>
        <option value="譲渡済">譲渡済</option>
      </select>
    </div>
    <div>
      <button>登録</button>
    </div>
  </form>

</body>

</html>
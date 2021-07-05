<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
$pdo = connect_to_db();

$id = $_GET["id"];

$sql = 'SELECT * FROM Transfer_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>譲渡会リスト（編集画面）</title>
</head>

<body>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="<?= link_transfer_read ?>">譲渡会（一覧）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <form action="transfer_update.php" method="POST" enctype="multipart/form-data">
    <h2>譲渡会リスト（編集画面）</h2>
    <div>
      写真(image):<input type="file" name="upfile" img src='{$record["image"]}' height=150px width=100px>
    </div>
    <div>
      名前(dogName): <input type="text" name="dogName" value="<?= $record["dogName"] ?>">
    </div>
    <div>
      犬種(dogBreed): <input type="text" name="dogBreed" value="<?= $record["dogBreed"] ?>">
    </div>
    <div>
      推定年齢(dogAge): <input type="text" name="dogAge" value="<?= $record["dogAge"] ?>">
    </div>
    <div>
      性別(sex): <input type="text" name="sex" value="<?= $record["sex"] ?>">
    </div>
    <div>
      避妊去勢(con_cas): <input type="text" name="con_cas" value="<?= $record["con_cas"] ?>">
    </div>
    <div>
      フィラリア(firaria): <input type="text" name="firaria" value="<?= $record["firaria"] ?>">
    </div>
    <div>
      持病(sick): <input type="text" name="sick" value="<?= $record["sick"] ?>">
    </div>
    <div>
      性格(personality): <textarea name="personality" rows="10" cols="40" value="<?= $record["personality"] ?>"><?= $record["personality"] ?></textarea>
    </div>
    <div>
      譲渡(transfer): <input type="text" name="transfer" value="<?= $record["transfer"] ?>">
    </div>
    <div>
      <button>submit</button>
    </div>
    <input type="hidden" name="id" value="<?= $record["id"] ?>">
    </fieldset>
  </form>

</body>

</html>
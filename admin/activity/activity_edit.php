<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
$pdo = connect_to_db();

$id = $_GET["id"];

$sql = 'SELECT * FROM activity_table WHERE id=:id';
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
  <title>活動報告</title>
</head>

<body>
  <a href="<?= link_admin_top ?>">管理者TOP</a>
  <a href="<?= link_activity_read ?>">活動報告</a>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_transfer_read ?>">譲渡会（編集）</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <form action="activity_update.php" method="POST" enctype="multipart/form-data">
    <h2>活動報告</h2>
    <div>
      写真(image):<input type="file" name="upfile" img src='{$record["image"]}' height=150px width=100px>
    </div>
    <div>
      日付(date): <input type="text" name="date" value="<?= $record["date"] ?>">
    </div>
    <div>
      タイトル(title): <input type="text" name="title" value="<?= $record["title"] ?>">
    </div>
    <div>
      記事(article): <textarea name="article" rows="10" cols="40" value="<?= $record["article"] ?>"><?= $record["article"] ?></textarea>
    </div>
    <div>
      <button>submit</button>
    </div>
    <input type="hidden" name="id" value="<?= $record["id"] ?>">
  </form>

</body>

</html>
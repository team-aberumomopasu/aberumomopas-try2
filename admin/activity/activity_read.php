<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
$pdo = connect_to_db();

$sql = "SELECT * FROM activity_table ORDER BY id DESC";
$sql = 'SELECT * FROM activity_table LEFT OUTER JOIN (SELECT activity_id, COUNT(id) AS cnt FROM activity_like_table GROUP BY activity_id) AS result_table ON activity_table.id = result_table.activity_id ORDER BY id DESC';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    // 折り畳み展開ポインタ ここから
    $output .= "<details>";
    $output .= "<summary>";
    $output .= "<div>";
    $output .= "<p style='display:inline;' >{$record['date']}</p>";
    $output .= "<p style='display:inline;' >  {$record['title']}</p>";
    $output .= "<p style='display:inline;' >👍{$record['cnt']}</p>";
    $output .= "</div>";
    $output .= "<p style='display:inline;'><a href='activity_edit.php?id={$record["id"]}'>修正</a></p>";
    $output .= "<p style='display:inline;'><a href='activity_delete.php?id={$record["id"]}'>削除</a></p>";
    $output .= "</summary>";

    // 折り畳まれ部分 ここから
    $output .= "<p><img src='{$record["image"]}' height=150px width=100px></p>";
    $output .= "<p>{$record["article"]}</p>";
    $output .= "</details>";
  }
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>活動報告</title>
  <link rel="stylesheet" href="#">
</head>

<body>
  <a href="<?= link_admin_top ?>">管理者TOP</a>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_transfer_read ?>">譲渡会（編集）</a>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <h1>活動報告</h1>
  <a href="<?= link_activity_input ?>">新規追加</a>
  <?= $output ?>

</body>

</html>
<?php
include("../functions.php");
include("../config/link.php");
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
    $output .= "<div class='openclose'>";
    $output .= "<p class='date' style='display:inline;' >{$record['date']}</p>";
    $output .= "<p class='title' style='display:inline;' >  {$record['title']}</p>";
    $output .= "<p class='good' style='display:inline;' >👍{$record['cnt']}</p>";
    $output .= "</div>";
    $output .= "</summary>";

    // 折り畳まれ部分 ここから
    $output .= "<p><img src='../admin/activity/{$record["image"]}' height=150px width=100px></p>";
    $output .= "<p>{$record["article"]}</p>";
    $output .= "<p><a href='activity_like_create.php?activity_id={$record["id"]}'>いいね</a></p>";
    $output .= "</details>";
    // 折り畳まれ部分 ここまで

  }
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>活動報告</title>
  <link rel="stylesheet" href="#">

</head>

<body>
  <a href="<?= link_index ?>">TOP</a>
  <a href="<?= link_about ?>">はじめに</a>
  <a href="<?= link_signature ?>">ネット署名</a>
  <a href="<?= link_transfer ?>">譲渡会</a>
  <a href="<?= link_donate ?>">寄付•グッズ</a>
  <a href="<?= link_contact ?>">コンタクト</a>
  <a href="<?= link_SOS ?>">S0S</a>

  <h1>活動報告</h1>

  <?= $output ?>

</body>

</html>
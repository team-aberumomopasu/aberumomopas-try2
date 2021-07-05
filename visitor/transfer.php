<?php
include("../functions.php");
include("../config/link.php");
$pdo = connect_to_db();

$sql = "SELECT * FROM Transfer_table ORDER BY id DESC";

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
    $output .= '<div>';
    $output .= '<div>';
    $output .= '<div>';
    $output .= "<img src='../admin/transfer/{$record["image"]}' height=200px >";
    $output .= "</div>";
    $output .= "<div>";
    $output .= "<p>名前:{$record["dogName"]}</p>";
    $output .= "<p>年齢:推定 {$record["dogAge"]}歳</p>";
    if ($record["sex"] == "オス") {
      $output .= "<p>性別:,<img src='../style-img/オス.png' height=20px></p>";
    } else {
      $output .= "<p>性別: <img src='../style-img/メス.png' height=20px></p>";
    }
    $output .= "<p>避妊去勢手術:{$record["con_cas"]}</p>";
    $output .= "<p>フィラリア検査:{$record["firaria"]}</p>";
    $output .= "<p>犬種:{$record["dogBreed"]}</p>";
    $output .= "<p>持病:{$record["sick"]}</p>";
    $output .= "<p>性格:</p>";
    $output .= "<p>{$record["personality"]}</p>";
    $output .= "</div>";
    $output .= "</div>";
    $output .= "</div>";
    $output .= "</div>";
  }
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>譲渡会</title>
  <link rel="stylesheet" href="#">
</head>

<body>
  <a href="<?= link_index ?>">TOP</a>
  <a href="<?= link_about ?>">はじめに</a>
  <a href="<?= link_activity ?>">活動報告</a>
  <a href="<?= link_signature ?>">ネット署名</a>
  <a href="<?= link_donate ?>">寄付•グッズ</a>
  <a href="<?= link_contact ?>">コンタクト</a>
  <a href="<?= link_SOS ?>">S0S</a>

  <h1>譲渡会</h1>

  <?= $output ?>

</body>


</html>
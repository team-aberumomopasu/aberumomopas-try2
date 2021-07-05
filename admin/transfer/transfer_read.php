<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
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
    $output .= "<tr>";
    $output .= "<td><img src='{$record["image"]}' height=150px width=100px></td>";
    $output .= "<td>{$record["dogName"]}</td>";
    $output .= "<td>{$record["dogBreed"]}</td>";
    $output .= "<td>推定 {$record["dogAge"]}歳</td>";
    if ($record["sex"] == "オス") {
      $output .= "<td><img src='../../style-img/オス.png' height=20px></td>";
    } else {
      $output .= "<td><img src='../../style-img/メス.png' height=20px></td>";
    }
    $output .= "<td>{$record["con_cas"]}</td>";
    $output .= "<td>{$record["firaria"]}</td>";
    $output .= "<td>{$record["sick"]}</td>";
    $output .= "<td>{$record["personality"]}</td>";
    $output .= "<td>{$record["transfer"]}</td>";
    $output .= "<td><a href='transfer_edit.php?id={$record["id"]}'>修正</a></td>";
    $output .= "<td><a href='transfer_delete.php?id={$record["id"]}'>削除</a></td>";
    $output .= "</tr>";
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
  <title>譲渡会（編集）</title>
</head>

<body>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <h2>譲渡会（編集）</h2>
  <a href="<?= link_transfer_input ?>">新規登録</a>
  <table>
    <thead>
      <tr>
        <th>写真</th>
        <th>名前</th>
        <th>犬種</th>
        <th>年齢</th>
        <th>性別</th>
        <th>避妊去勢手術</th>
        <th>フィラリア検査</th>
        <th>持病</th>
        <th>性格</th>
        <th>譲渡</th>
      </tr>
    </thead>
    <tbody>
      <?= $output ?>
    </tbody>
  </table>
</body>

</html>
<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
$pdo = connect_to_db();

$sql = "SELECT * FROM users_table ";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  if ($_SESSION["is_admin"] == 1) {
    foreach ($result as $record) {
      $output .= "<tr>";
      $output .= "<td>$record[username]</td>";
      if ($record["is_admin"] == 0) {
        $output .= "<td>一部機能を制限</td>";
      } else {
        $output .= "<td>フルコントロール</td>";
      }
      $output .= "<td><a href='admin_delete.php?id={$record["id"]}'>削除</a></td>";
      $output .= "</tr>";
    }
    unset($value);
  } else {
    foreach ($result as $record) {
      $output .= "<tr>";
      $output .= "<td>$record[username]</td>";
      $output .= "</tr>";
    }
    unset($value);
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者一覧</title>
</head>

<body>
  <a href="<?= link_add_NewAdmin ?>">管理者追加</a>
  <a href="<?= link_activity_read ?>">活動報告（編集）</a>
  <a href="#">ネット署名</a></li>
  <a href="<?= link_index ?>">index.htmlへ（ユーザー画面）</a>
  <a href="<?= link_logout ?>">ログアウト</a>

  <h2>管理者一覧</h2>
  <a href="<?= link_add_NewAdmin ?>">管理者追加登録</a>
  <table>
    <thead>
      <tr>
        <th>管理者名</th>
        <th>権限</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?= $output ?>
    </tbody>
  </table>
</body>

</html>
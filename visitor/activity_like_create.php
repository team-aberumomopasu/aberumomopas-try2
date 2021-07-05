<?php
include("../functions.php");
include("../config/link.php");
$pdo = connect_to_db();

$activity_id = $_GET['activity_id'];

$sql = 'INSERT INTO activity_like_table(id, activity_id, created_at) VALUES(NULL, :activity_id, sysdate())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':activity_id', $activity_id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:$re_activity");
  exit();
}

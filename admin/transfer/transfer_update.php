<?php
session_start();
include("../../functions.php");
include("../../config/link.php");
check_session_id();
$pdo = connect_to_db();

if (
  !isset($_POST['dogName']) || $_POST['dogName'] == '' ||
  !isset($_POST['dogAge']) || $_POST['dogAge'] == '' ||
  !isset($_POST['sex']) || $_POST['sex'] == '' ||
  !isset($_POST['dogBreed']) || $_POST['dogBreed'] == '' ||
  !isset($_POST['sick']) || $_POST['sick'] == '' ||
  !isset($_POST['personality']) || $_POST['personality'] == '' ||
  !isset($_POST['transfer']) || $_POST['transfer'] == '' ||
  !isset($_POST['id']) || $_POST['id'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$dogName = $_POST["dogName"];
$dogAge = $_POST["dogAge"];
$sex = $_POST["sex"];
$dogBreed = $_POST["dogBreed"];
$sick = $_POST["sick"];
$personality = $_POST["personality"];
$transfer = $_POST["transfer"];
$con_cas = $_POST["con_cas"];
$firaria = $_POST["firaria"];
$id = $_POST["id"];

if ($_FILES['upfile']['error'] !== 4) {
  if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] == 0) {
    // 送信が正常に行われたときの処理
    $uploaded_file_name = $_FILES['upfile']['name']; //アップロードしたファイル名を取得
    $temp_path = $_FILES['upfile']['tmp_name']; //一時保管しているtmpフォルダの場所の取得.
    $directory_path = 'Transfer_upload/'; //アップロード先のパス(フォルダ)の設定(自分で決める)
    $extension = pathinfo($uploaded_file_name, PATHINFO_EXTENSION); //ファイルの拡張子の種類を取得
    $unique_name = date('YmdHis') . md5(session_id()) . "." . $extension; //ファイルごとにユニークな名前を作成.(最後に拡張子を追加)
    $filename_to_save = $directory_path . $unique_name; //ファイルの保存場所をファイル名に追加

    if (is_uploaded_file($temp_path)) {
      // ↓ここでtmpファイルを移動する
      if (move_uploaded_file($temp_path, $filename_to_save)) {
        chmod($filename_to_save, 0644); // 権限の変更
        $img = '<img src="' . $filename_to_save . '" >'; // imgタグを設定
      } else {
        exit('Error:アップロードできませんでした'); // 画像の保存に失敗
      }
    } else {
      exit('Error:画像がありません'); // tmpフォルダにデータがない
    }
  } else {
    exit('Error:画像が送信されていません'); // 送られていない，エラーが発生，などの場合
  }

  $sql = "UPDATE Transfer_table SET image=:image, dogName=:dogName, dogAge=:dogAge, sex=:sex, con_cas=:con_cas, firaria=:firaria, dogBreed=:dogBreed, sick=:sick, personality=:personality, transfer=:transfer, updated_at=sysdate() WHERE id=:id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':image', $filename_to_save, PDO::PARAM_STR);
  $stmt->bindValue(':dogName', $dogName, PDO::PARAM_STR);
  $stmt->bindValue(':dogAge', $dogAge, PDO::PARAM_STR);
  $stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
  $stmt->bindValue(':con_cas', $con_cas, PDO::PARAM_STR);
  $stmt->bindValue(':firaria', $firaria, PDO::PARAM_STR);
  $stmt->bindValue(':dogBreed', $dogBreed, PDO::PARAM_STR);
  $stmt->bindValue(':sick', $sick, PDO::PARAM_STR);
  $stmt->bindValue(':personality', $personality, PDO::PARAM_STR);
  $stmt->bindValue(':transfer', $transfer, PDO::PARAM_STR);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $status = $stmt->execute();

  if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
  } else {
    header("Location:$re_transfer_read");
    exit();
  }
} else {
  $sql = "UPDATE Transfer_table SET dogName=:dogName, dogAge=:dogAge, sex=:sex, con_cas=:con_cas, firaria=:firaria, dogBreed=:dogBreed, sick=:sick, personality=:personality, transfer=:transfer, updated_at=sysdate() WHERE id=:id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':dogName', $dogName, PDO::PARAM_STR);
  $stmt->bindValue(':dogAge', $dogAge, PDO::PARAM_STR);
  $stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
  $stmt->bindValue(':con_cas', $con_cas, PDO::PARAM_STR);
  $stmt->bindValue(':firaria', $firaria, PDO::PARAM_STR);
  $stmt->bindValue(':dogBreed', $dogBreed, PDO::PARAM_STR);
  $stmt->bindValue(':sick', $sick, PDO::PARAM_STR);
  $stmt->bindValue(':personality', $personality, PDO::PARAM_STR);
  $stmt->bindValue(':transfer', $transfer, PDO::PARAM_STR);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $status = $stmt->execute();

  if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
  } else {
    header("Location:$re_transfer_read");
    exit();
  }
}

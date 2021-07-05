<?php
include("../config/link.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>コンタクト</title>
  <link rel="stylesheet" href="#">
</head>

<body>
  <a href="<?= link_index ?>">TOP</a>
  <a href="<?= link_activity ?>">活動報告</a>
  <a href="<?= link_signature ?>">ネット署名</a>
  <a href="<?= link_transfer ?>">譲渡会</a>
  <a href="<?= link_donate ?>">寄付•グッズ</a>
  <a href="<?= link_contact ?>">コンタクト</a>
  <a href="<?= link_SOS ?>">S0S</a>

  <p>ご意見、お問い合わせは下記よりお願いします。</p>
  <p>現在、返信に●〜●日程度頂いております。ご了承ください。</p>


  <p>お名前</p>
  <input type="text" placeholder="例）山田花子">
  <p>メールアドレス</p>
  <input type="email" placeholder="例）example@gmail.com">
  <p>お問い合わせ内容</p>
  <textarea placeholder="虐待、事故を見かけた方はSOSフォームからメッセージを送信してください"></textarea>
  <div>
    <input type="submit" value="送信する">
  </div>
</body>

</html>
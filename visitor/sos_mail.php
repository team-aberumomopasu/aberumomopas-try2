<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メールでSOS</title>
  <link rel="stylesheet" href="css/sos_mail.css">
</head>

<body>

  <div class="Form">
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>通報者名
      </p>
      <input type="text" class="Form-Item-Input" placeholder="例）山田 太郎">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>場所</p>
      <input type="text" class="Form-Item-Input" placeholder="例）可能な場合は住所を記入">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
      <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
      <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
      <textarea class="Form-Item-Textarea" placeholder="例）動物の種類、状況など詳しく記入してください"></textarea>
    </div>
    <input type="submit" class="Form-Btn" value="送信する">
  </div>
  
</body>
</html>
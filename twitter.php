<?php

/**************************************************

	[GET search/tweets]のお試しプログラム

	認証方式: アクセストークン

	配布: SYNCER
	公式ドキュメント: https://dev.twitter.com/rest/reference/get/search/tweets
	日本語解説ページ: https://syncer.jp/Web/API/Twitter/REST_API/GET/search/tweets/

 **************************************************/

// 設定
$api_key = 'DZzO38gASoTFrK76gfKFWg4ez';    // APIキー
$api_secret = 'eU08h8x2VYWfhcSQGd3oHdi0oEk6av6w6MubQ8xk7iA7FI1JcW';    // APIシークレット
$access_token = '';    // アクセストークン
$access_token_secret = '';    // アクセストークンシークレット
$request_url = 'https://api.twitter.com/1.1/search/tweets.json';    // エンドポイント
$request_method = 'GET';


// パラメータA (オプション)
$params_a = array(
  // ハッシュタグは増やせる---
  "q" => "＃動物 OR ＃拡散希望 犬 OR ＃犬 OR ＃猫 OR ＃犬猫 OR ＃小動物 OR ＃迷子犬 OR ＃野良 OR ＃野犬 OR ＃首輪 OR ＃保健所 OR ＃収容 OR ＃保護  OR ＃ミルクボランティア OR ＃里親 OR ＃飼い主 OR ＃遺棄 OR ＃虐待 OR ＃ダンボール",

  //		"geocode" => "35.794507,139.790788,1km",
  "lang" => "ja",
  "locale" => "ja",
  // "result_type" => "popular",
  "count" => "100",
  //		"until" => "2017-01-17",
  //		"since_id" => "643299864344788992",
  //		"max_id" => "643299864344788992",
  "include_entities" => "true",
);

// キーを作成する (URLエンコードする)
$signature_key = rawurlencode($api_secret) . '&' . rawurlencode($access_token_secret);

// パラメータB (署名の材料用)
$params_b = array(
  'oauth_token' => $access_token,
  'oauth_consumer_key' => $api_key,
  'oauth_signature_method' => 'HMAC-SHA1',
  'oauth_timestamp' => time(),
  'oauth_nonce' => microtime(),
  'oauth_version' => '1.0',
);

// パラメータAとパラメータBを合成してパラメータCを作る
$params_c = array_merge($params_a, $params_b);

// 連想配列をアルファベット順に並び替える
ksort($params_c);

// パラメータの連想配列を[キー=値&キー=値...]の文字列に変換する
$request_params = http_build_query($params_c, '', '&');

// 一部の文字列をフォロー
$request_params = str_replace(array('+', '%7E'), array('%20', '~'), $request_params);

// 変換した文字列をURLエンコードする
$request_params = rawurlencode($request_params);

// リクエストメソッドをURLエンコードする
// ここでは、URL末尾の[?]以下は付けないこと
$encoded_request_method = rawurlencode($request_method);

// リクエストURLをURLエンコードする
$encoded_request_url = rawurlencode($request_url);

// リクエストメソッド、リクエストURL、パラメータを[&]で繋ぐ
$signature_data = $encoded_request_method . '&' . $encoded_request_url . '&' . $request_params;

// キー[$signature_key]とデータ[$signature_data]を利用して、HMAC-SHA1方式のハッシュ値に変換する
$hash = hash_hmac('sha1', $signature_data, $signature_key, TRUE);

// base64エンコードして、署名[$signature]が完成する
$signature = base64_encode($hash);

// パラメータの連想配列、[$params]に、作成した署名を加える
$params_c['oauth_signature'] = $signature;

// パラメータの連想配列を[キー=値,キー=値,...]の文字列に変換する
$header_params = http_build_query($params_c, '', ',');

// リクエスト用のコンテキスト
$context = array(
  'http' => array(
    'method' => $request_method, // リクエストメソッド
    'header' => array(        // ヘッダー
      'Authorization: OAuth ' . $header_params,
    ),
  ),
);

// パラメータがある場合、URLの末尾に追加
if ($params_a) {
  $request_url .= '?' . http_build_query($params_a);
}


// オプションがある場合、コンテキストにPOSTフィールドを作成する (GETの場合は不要)
//	if( $params_a ) {
//		$context['http']['content'] = http_build_query( $params_a ) ;
//	}

// cURLを使ってリクエスト
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $request_url);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $context['http']['method']);  // メソッド
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  // 証明書の検証を行わない
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // curl_execの結果を文字列で返す
curl_setopt($curl, CURLOPT_HTTPHEADER, $context['http']['header']);  // ヘッダー
//	if( isset( $context['http']['content'] ) && !empty( $context['http']['content'] ) ) {		// GETの場合は不要
//		curl_setopt( $curl , CURLOPT_POSTFIELDS , $context['http']['content'] ) ;	// リクエストボディ
//	}
curl_setopt($curl, CURLOPT_TIMEOUT, 5);  // タイムアウトの秒数
$res1 = curl_exec($curl);
$res2 = curl_getinfo($curl);
curl_close($curl);


// 取得したデータ
$json = substr($res1, $res2['header_size']);    // 取得したデータ(JSONなど)
$header = substr($res1, 0, $res2['header_size']);  // レスポンスヘッダー (検証に利用したい場合にどうぞ)

// [cURL]ではなく、[file_get_contents()]を使うには下記の通りです…
// $json = file_get_contents( $request_url , false , stream_context_create( $context ) ) ;

// JSONをオブジェクトに変換
$obj = json_decode($json);
// var_dump($obj);
// exit();
// $json_encode = json_encode($obj);
// var_dump($obj);
// HTML用
$html = '';

// タイトル
$html .= '<h1 style="text-align:center; border-bottom:1px solid #555; padding-bottom:12px; margin-bottom:48px; color:#D36015;">GET search/tweets</h1>';

// エラー判定
if (!$json || !$obj) {
  $html .= '<h2>エラー内容</h2>';
  $html .= '<p>データを取得することができませんでした…。設定を見直して下さい。</p>';
}

// 検証用
$html .= '<h2>取得したデータ</h2>';
$html .= '<p>下記のデータを取得できました。</p>';
$html .=   '<h3>ボディ(JSON)</h3>';
$html .=   '<p><textarea style="width:80%" rows="8">' . $json . '</textarea></p>';
$html .=   '<h3>レスポンスヘッダー</h3>';
$html .=   '<p><textarea style="width:80%" rows="8">' . $header . '</textarea></p>';

// 検証用
$html .= '<h2>リクエストしたデータ</h2>';
$html .= '<p>下記内容でリクエストをしました。</p>';
$html .=   '<h3>URL</h3>';
$html .=   '<p><textarea style="width:80%" rows="8">' . $context['http']['method'] . ' ' . $request_url . '</textarea></p>';
$html .=   '<h3>ヘッダー</h3>';
$html .=   '<p><textarea style="width:80%" rows="8">' . implode("\r\n", $context['http']['header']) . '</textarea></p>';

// フッター
$html .= '<small style="display:block; border-top:1px solid #555; padding-top:12px; margin-top:72px; text-align:center; font-weight:700;">プログラムの説明: <a href="https://syncer.jp/Web/API/Twitter/REST_API/GET/search/tweets/" target="_blank">SYNCER</a></small>';

// 出力 (本稼働時はHTMLのヘッダー、フッターを付けよう)
// echo $html ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#アニマルポリス</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/twitter.css">
</head>

<body>

  <header>
    <div class="header_container">
      <h1>#アニマルポリス<img src="./images/パトカーこっち.png" alt="画像">巡回中</h1>
      <div>
        <p>動物に関するツイートのみを表示しています。</p>
        <p> リロードすると最新の１００件を取得し直します。</p>
        <p>虐待や里親募集などの投稿を見かけたら
        <p  class="sample">Tweet#アニマルポリス</p>
        をタップ！</p>
        <p>引用ツイートをお願いします。</p>
        <p>（自動で「<span>＃アニマルポリス</span>」が入力されます。）</p>
      </div>
      </p>
    </div>
  </header>
  <main id="main_tagu">
  </main>

  <footer>

  </footer>

  <script>
    // jsonデータをjsで取得
    let js_array = <?= json_encode($obj); ?>;
    console.log(js_array);

    // ユーザー名
    function get_user_name(i) {
      console.log(js_array.statuses[i].user["name"]);
      const u_name = js_array.statuses[i].user["name"];
      return u_name;
    }

    // ユーザーID
    function get_user_id(i) {
      console.log(js_array.statuses[i].user["screen_name"]);
      const u_id = js_array.statuses[i].user["screen_name"];
      return u_id;
    }

    // ツイート
    function get_user_tweet(i) {
      console.log(js_array.statuses[i].text);
      const u_tweet = js_array.statuses[i].text;
      return u_tweet;
    }
    // 画像
    // console.log(typeof(js_array.statuses[0].entities.media));
    function get_posted_img(i) {
      if (typeof(js_array.statuses[i].entities.media) != "undefined") {
        const p_img = js_array.statuses[i].entities.media[0].media_url;
        return p_img;
      } else if (typeof(js_array.statuses[i].retweeted_status) != "undefined") {
        if (typeof(js_array.statuses[i].retweeted_status.entities.media) != "undefined") {
          const p_img = js_array.statuses[i].retweeted_status.entities.media[0].media_url;
          return p_img;
        }
      }
    }

    // 日付
    // 元
    // console.log(js_array.statuses[0].created_at)
    function JpTime(objTime) {
      const date01 = objTime;
      const s = date01.split(' ');
      const t = s[3].split(':');
      const h = parseInt(t[0]) + 9;
      s[3] = h + ":" + t[1] + ":" + t[2];
      const jptime = s[0] + " " + s[1] + " " + s[2] + " " + s[3] + " " + s[4] + " " + s[5];
      return jptime;
    }

    // 変更後
    // console.log(JpTime(js_array.statuses[0].created_at));

    // https://mobile.twitter.com/shiki_neco/status/1412432246858928133

    // ページリンク
    // console.log(js_array.statuses[0].entities.media[0].url);
    function get_tweetUrl(i) {
      if (typeof(js_array.statuses[i].retweeted_status) != "undefined") {
        console.log(js_array.statuses[i].retweeted_status.id_str);
        const t_id_str = js_array.statuses[i].retweeted_status.id_str;
        const t_url = `https://mobile.twitter.com/i/web/status/${t_id_str}`;
        console.log(t_url);
        return t_url;
      } else if (typeof(js_array.statuses[i]) != "undefined") {
        const t_id_str = js_array.statuses[i].id_str;
        const t_url = `https://mobile.twitter.com/i/web/status/${t_id_str}`;
        console.log(t_url);
        return t_url;
      }
    }

    // プロフィール画像
    function get_profile_img(i) {
      if (typeof(js_array.statuses[i].retweeted_status) != "undefined") {
        // console.log(js_array.statuses[i].retweeted_status.user.profile_image_url);
        const profile_img = js_array.statuses[i].retweeted_status.user.profile_image_url;
        return profile_img;
      } else if (typeof(js_array.statuses[i].user) != "undefined") {
        const profile_img = js_array.statuses[i].user.profile_image_url;
        return profile_img;
      }
    }
    // containerとmainタグを繋げる
    function createConteainer(i) {
      const container = document.createElement('div');
      container.classList.add('container');
      main_tagu.appendChild(container);
      // rowとcal2を繋げる
      const row = document.createElement('div');
      row.classList.add('row');
      const col2 = document.createElement('div');
      col2.classList.add('col-2');
      row.appendChild(col2);
      // cal2とu-imgを繋げる
      const u_img = document.createElement('img');
      u_img.classList.add('media_pic');
      u_img.id = `media_pic${i}`;
      const u_img_box = document.createElement('div');
      u_img_box.id = "u_img_box";
      u_img_box.appendChild(u_img);
      col2.append(u_img_box);
      // プロフィール画像がなかったらデフォルト写真を表示
      if (typeof(get_profile_img(i)) != "undefined") {
        u_img.src = get_profile_img(i);
      } else {
        u_img.src = "./images/アイコンなし.jpeg";
      }

      const col10 = document.createElement('a');
      col10.classList.add('col-10');
      // cal-10をリンクにする
      col10.id = `link${i}`;
      if (typeof(get_tweetUrl(i)) != "undefined") {
        col10.href = get_tweetUrl(i);
      }
      row.appendChild(col10);
      // username_idとcal10を繋げる
      const username_id = document.createElement('div');
      username_id.classList.add('username_id');
      username_id.id = `username_id${i}`;
      col10.appendChild(username_id);
      // ユーザー名を表示する
      const user_name = document.createElement('p');
      user_name.classList.add('user_name');
      user_name.id = `user_name${i}`;
      user_name.textContent = get_user_name(i);
      // user_idを表示する
      const user_id = document.createElement('p');
      user_id.classList.add('user_id');
      user_id.id = `user_id${i}`;
      user_id.textContent = get_user_id(i);
      // username_idの子要素を繋げる
      username_id.append(user_name, user_id);
      // ツイートの表示
      const tweet = document.createElement('p');
      tweet.id = `tweet${i}`;
      tweet.textContent = get_user_tweet(i);
      col10.appendChild(tweet);
      // 写真があったら表示する
      if (typeof(get_posted_img(i)) == "string") {
        const img = document.createElement('img');
        img.classList.add('img');
        img.id = `img${i}`; //ソース帰る
        img.src = get_posted_img(i);
        col10.appendChild(img);
      }

      const testes = document.createElement('div');
      // リツイートリンク先の定義
      testes.id = "testes";
      col10.appendChild(testes);
      const Uid = js_array.statuses[i].user["screen_name"];
      if (typeof(js_array.statuses[i].retweeted_status) != "undefined") {
        const Url = js_array.statuses[i].retweeted_status.id_str;
        const retweetUrl = `https://twitter.com/${Uid}/status/${Url}`;
        testes.innerHTML = `<a href="https://twitter.com/intent/tweet?button_hashtag=アニマルポリス&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-url="${retweetUrl}">Tweet</a>`;
      } else if (typeof(js_array.statuses[i].user) != "undefined") {
        const Url = js_array.statuses[i].user.id_str;
        const retweetUrl = `https://twitter.com/${Uid}/status/${Url}`;
        testes.innerHTML = `<a href="https://twitter.com/intent/tweet?button_hashtag=アニマルポリス&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-url="${retweetUrl}">Tweet</a>`;
      }

      // 日付の定義
      const date = document.createElement('p');
      date.id = `date${i}`;
      date.textContent = JpTime(js_array.statuses[i].created_at);
      col10.append(date);
      // 最後に繋げる
      container.appendChild(row);
      // post_retweet(i);
    }

    // メインとコンテナと繋げる
    const main_tagu = document.getElementById('main_tagu');
    const statuses = js_array.statuses;
    console.log(statuses);
    // 取得したデータぶん要素を作成
    for (let i = 0; i < statuses.length; i++) {
      createConteainer(i);
    };

  </script>
  <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>

  <!-- 画像が取れてない時がある（現在複数不可） -->
  <!-- タグを青色で表示（リンクもつけたい） -->

</body>

</html>
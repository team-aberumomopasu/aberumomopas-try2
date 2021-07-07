<?php
// noteの取得
// タイムゾーンを日本に設定
date_default_timezone_set('Asia/Tokyo');

// 取得したいRSSのURLを設定
$url = "https://note.com/animal_police/rss";
// MAXの表示件数を設定
$max = 3;

// simplexml_load_file()でRSSをパースしてオブジェクトを取得、オブジェクトが空でなければブロック内を処理
if ($rss = simplexml_load_file($url)) {
  $cnt = 0;
  $output = '';
  /*
* $item->title：タイトル
* $item->link：リンク
* strtotime( $item->pubDate )：更新日時のUNIX TIMESTAMP
* $item->description：詳細
*/
  // item毎に処理
  foreach ($rss->channel->item as $item) {
    // MAXの表示件数を超えたら終了
    if ($cnt >= $max) break;

    // 日付の表記の設定
    $date = date('Y年m月d日', strtotime($item->pubDate));
    // 出力するHTML
    $output .= '<div class="mu">';
    $output .= '<img src="' . $item->children('media', true)->thumbnail . '">';
    $output .= '<h3><small>' . $date . "</small>" . $item->title . '</h3>';
    $output .= $item->description;
    $output .= '<a class="btn" href="' . $item->link . '">';
    $output .= '</a>';
    $output .= '</div>';
    $cnt++;
  }
  // 文字列を出力
  echo $output;
}

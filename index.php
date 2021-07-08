<?php

include("functions.php");
include("config/link.php");
$pdo = connect_to_db();
$sql = "SELECT * FROM Transfer_table ORDER BY id DESC LIMIT 3";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
	$error = $stmt->errorInfo();
	echo json_encode(["error_msg" => "{$error[2]}"]);
	exit();
} else {
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!Doctype html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="動物虐待のない世界を目指しています">
	<meta name="viewport" content="width=device-width">
	<title>ANIMAL POLICE FUKUOKA</title>
	<link rel="stylesheet" media="all" href="css/apf_style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<!-- OGPTwitterシェアとかで表示されるよ -->

	<meta property="og:url" content="ページのURL" />
	<meta property="og:title" content="ANIMAL POLICE FUKUOKA" />
	<meta property="og:type" content="websit">
	<meta property="og:description" content="記事の抜粋" />
	<meta property="og:image" content="画像のURL" />
	<meta name="twitter:card" content="Summary Card" />
	<meta name="twitter:site" content="@Twitterユーザー名" />
	<meta property="og:site_name" content="サイト名" />
	<meta property="og:locale" content="ja_JP" />
	<meta property="fb:app_id" content="appIDを入力" />

</head>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
	$(function() {

		let
			winW = $(window).width(),
			winH = $(window).height(),
			nav = $('#mainnav ul a'),
			curPos = $(this).scrollTop();

		if (winW > 880) {
			let headerH = 20;
		} else {
			let headerH = 60;
		}

		$(nav).on('click', function() {
			nav.removeClass('active');
			let $el = $(this),
				id = $el.attr('href');
			$('html, body').animate({
				scrollTop: $(id).offset().top - headerH
			}, 500);
			$(this).addClass('active');
			if (winW < 880) {
				$('#menuWrap').next().slideToggle();
				$('#menuBtn').removeClass('close');
			}
			return false;
		});

		$('.panel').hide();
		$('#menuWrap').toggle(function() {
				$(this).next().slideToggle();
				$('#menuBtn').toggleClass('close');
			},
			function() {
				$(this).next().slideToggle();
				$('#menuBtn').removeClass('close');
			});

	});
</script>

<body id="top">
	<div id="wrapper">

		<div id="sidebar">
			<div id="sidebarWrap">
				<h1 id="sidebar_title">ANIMAL POLICE FUKUOKA</h1>
				<nav id="mainnav">
					<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
					<div class="panel">
						<ul>
							<li><a href="#top"><span class="material-icons">
										home
									</span>トップ</a></li>
							<li><a href="#sec01">
									<span class="material-icons">
										emoji_flags
									</span>
									メッセージ</a>
							</li>
							<li><a href="#sec02"><span class="material-icons">
										import_contacts
									</span>活動報告</a></li>
							<li><a href="#sec03">
									<span class="material-icons">
										pets
									</span>里親募集</a></li>
							<li><a href="#sec04"><span class="material-icons">
										email
									</span>お問合わせ</a></li>
							<li><a href="#sec05">
									<span class="material-icons">
										place
									</span>会社概要</a></li>
						</ul>
						<!-- <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">ホーム</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/activity.php">活動報告</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/donate.php">寄付•グッズ</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/transfer.php">譲渡会</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="visitor/contact.php">お問合わせ</a></li> -->
						</ul>
						<ul id="sns">
							<!-- <li><a href="#" target="_blank"><img src="images/iconFb.png" width="20" height="20" alt="FB"></a></li> -->
							<li><a id="logo_twitter" href="#" target="_blank"><img src="images/logo_Twitter.svg" width="30" height="30" alt="twitter"></a>
							</li>
							<li><a id="logo_note" href="https://note.com/animal_police" target="_blank"><img src="images/logo_note.png" width="50" height="50" alt="note"></a></li>
							<li><a id="logo_youtube" href="https://www.youtube.com/channel/UCsIFu-o1KP0ETTCrEUw36fw" target="_blank"><img src="images/logo_youtube2.png" width="30" height="30" alt="You Tube"></a></li>
						</ul>


					</div>
				</nav>
			</div>
		</div>

		<div id="content">
			<p id="mainImg"><img src="images/top.jpg" alt="dog"></p>
			<!-- MESSAGE -->
			<section id="sec01">
				<header>
					<h2><span class="title">メッセージ</span></h2>
				</header>
				<div class="innerS">

					<div class="masseage_parent">
						<p class="masseage_sub_title">
							「かわいそう」
							だけじゃ
							命は救えない
						</p>
						<p>
							「かわいそう」だけど何もしない人が多いのも現実です。
							つい最近まで私も後者の立場でした。
							仕事をしながら寄付やボランティアをするのは限界があります。
							でも、このままじゃ何も変わらない・・・
						</p>
					</div>

					<div class="masseage_parent">
						<p class="masseage_sub_title">
							「国の偉大さ道徳的発展は、
						</p>
						<p class="masseage_sub_title">
							その国における動物の扱い方でわかる」
						</p>
						<p>
							私が感銘を受けた言葉の一つです。
							動物虐待、殺処分ともになくならない動物後進国の日本。
							保護、啓発活動に尽力している人がいる一方で
							思い切って仕事を辞め、この団体を立ち上げました。
						</p>
					</div>

					<div class="masseage_parent">
						<p class="masseage_sub_title">
							本当にセカイを変えたいなら行動するしかない。
						</p>
						<p>
							皆さんの思いを背負って虐待、殺処分撲滅に取り組んでいきます。
							活動に賛同してくださる方はサポートをお願いします。
						</p>
					</div>

				</div>
			</section>
			<!-- // MESSAGE -->

			<section id="sec02">
				<header>
					<h2><span class="title">活動報告</span></h2>
				</header>
				<div class="innerS">
					<p>
						アニマルポリスを本気で作りたいと思い、10年勤めた新聞社を今年１月に退社。ボランティアではなく、仕事として成り立たせるためにはIT、プログラミング、起業について学ぶ必要があると感じ、現在の専門学校へ。卒業時の10月には団体を立ち上げたいと思っている。私が小学生の頃、近所のおじさんが飼い犬を殺してしまう悲しい出来事がありました。無抵抗のまま暴行を受け、お腹がパンパンの状態で亡くなっていたそうです。大型犬だったので本気で抵抗すれば飼い主を噛むことも逃げることもできたはずなのに、それをしなかったあの子の気持ちを思うと今でも涙が出ます。飼い犬を虐待しても殺しても殺処分しても罪に問われていない人はたくさんいます。そんな日本を少しでも変えていきたい。これがアニマルポリスを作りたいと思った最大の理由です。
					</p>
				</div>
				<div class="innerS">
					<div id="message"></div>
				</div>

			</section>


			<!-- <ul id="gallery">

					<li><img src="images/photo01.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo02.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo03.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo04.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo05.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo06.jpg" width="360" height="350" alt=""></li>
					<li class="full"><img src="images/photo07.jpg" width="1080" height="695" alt=""></li>
					<li><img src="images/photo08.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo09.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo10.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo11.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo12.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo13.jpg" width="360" height="350" alt=""></li>
				</ul> -->


			<!-- // GALLERY -->
			<!-- BRAND -->
			<section id="sec03">
				<header>
					<h2><span class="title">譲渡会</span></h2>
				</header>
				<div class="innerS">

					<p>里親を探しています</p>
					<p>
						譲渡会は毎月第２日曜日に行っております
					</p>
					<p>
						譲渡会でお気に入りの仔が見つかったら、その後ご自宅で
						２週間お世話をしていただきます。
						双方に問題がないようでしたら、正式に譲渡となります。
					</p>


					<ul class="col4">
						<li>
							<p class="img"><img class="sec03_img" src="admin/transfer/<?= $result[0]['image'] ?>" width="168" height="168" alt=""></p>
						</li>
						<li>
							<p class="img"><img src="admin/transfer/<?= $result[1]['image'] ?>" width="168" height="168" alt=""></p>
						</li>
						<li>
							<p class="img"><img src="admin/transfer/<?= $result[2]['image'] ?>" width="168" height="168" alt=""></p>
						</li>
					</ul>
					<div class="a">
						<a href="<?= link_transfer ?>">詳しくはこちら</a>
					</div>
				</div>


			</section>
			<!-- // BRAND -->
			<!-- PROJECT -->
			<section id="sec04">
				<header>
					<h2><span class="title">お問合わせ</span></h2>
				</header>
				<div class="innerS">

					<div class="article">
						<div class="article-content">
							<img src="style-img/join-team.png">
							<p>仲間になりたい</p>
						</div>
						<div class="article-content">
							<img src="style-img/discipline.png">
							<p>飼育に関する相談</p>
						</div>
						<div class="article-content">
							<img src="style-img/sponsor.png">
							<p>スポンサー希望</p>
						</div>
						<div class="article-content">
							<img src="style-img/donate.png">
							<p>寄付について</p>
						</div>
					</div>
				</div>
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSezP1JcBEXfFgDVtw7za2NVUN5ZzG41VcYLd_ndD9uPvayafg/viewform?embedded=true" width="100%" height="808" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
			</section>
			<!-- // PROJECT -->
			<!-- COMPANY -->
			<section id="sec05">
				<header>
					<h2><span class="title">会社概要</span></h2>
				</header>
				<div class="innerS">
					<ul class="col2">
						<li>
							<p>〒201-1071<br>福岡県福岡市中央区区にこにこ町1-2-999</p>
							<p>TEL 0120-2525-2525</p>
							<p>e-Mail animal@example.com</p>
							<p>営業時間 10:00〜20:00（水曜定休）</p>
							<p>※都合により休業する場合がございます</p>
						</li>
						<li>
							<div id="map">
								<!-- GOOGLE MAP -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6647.1822509942!2d130.40242577773242!3d33.58996382293685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419185d8270707%3A0xd77996b98281d785!2z44K744Kk44Ot44Oz!5e0!3m2!1sja!2sjp!4v1625627470292!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								<!-- // GOOGLE MAP -->
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- // COMPANY -->

			<footer id="footer">

				<!-- <ul class="shareSns">
					<div id="ss">
						<ul class="clearfix">
							<li class="sstw"><a href="https://twitter.com/share?url=https://：" target="_blank">あ</i></a></li>
							<li class="ssfb"><a href="https://www.facebook.com/share.php?u=：" target="_blank">い</i></a></li>
							<li class="sshtb"><a href="http://b.hatena.ne.jp/entry/" target="_blank"><i class="fa-lg">う</i></a></li>

						</ul>
					</div>
					ここまでソーシャルシェア -->
				</ul>
				<p>©ANIMAL POLICE FUKUOKA All rights reserved.</p>

				<!-- 管理者権限を持った人しか使わないボタン -->
				<a href="<?= link_login ?>">管理者ログイン</a>
				Copyright(c) 2016 Sample Inc. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank">http://f-tpl.com</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
			</footer>

		</div>
	</div>


	<!-- noteの取得 -->
	<script>
		// HTMLドキュメントの解析後に実行
		window.addEventListener('DOMContentLoaded', function() {
			// XMLHttpRequestのインスタンスを作成
			let req = new XMLHttpRequest();

			// 読み込み時の処理を設定
			req.onreadystatechange = function() {
				// readyState=4は全てのデータを受信済み、
				// status=200は正常に処理されたことを意味します
				if (req.readyState == 4 && req.status == 200) {
					// 結果を代入
					document.getElementById("message").innerHTML = req.responseText;
				}
			}

			// 接続先のURLやメソッドを設定します
			req.open("GET", "config/note.php");

			// リクエストをサーバに送信
			req.send();

		})
	</script>


</body>

</html>
<?php

include("./config/link.php");

?>

<!Doctype html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="動物虐待のない世界を目指しています">
	<meta name="viewport" content="width=device-width">
	<title>ANIMAL POLICE FUKUOKA</title>
	<link rel="stylesheet" media="all" href="css/apf_style.css">
	<link href="https://fonts.googleapis.com/css?family=Material+Rounded" rel="stylesheet">
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
							<li><a href="#top">トップ</a></li>
							<li><a href="#sec01">メッセージ</a></li>
							<li><a href="#sec02">活動報告</a></li>
							<li><a href="#sec03">譲渡会</a></li>
							<li><a href="#sec04">お問合わせ</a></li>
							<li><a href="#sec05">会社概要</a></li>
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
			<section id=" sec01">
				<header>
					<h2><span>メッセージ</span></h2>
				</header>
				<div class="innerS">
					<p>
						アニマルポリスを本気で作りたいと思い、10年勤めた新聞社を今年１月に退社。ボランティアではなく、仕事として成り立たせるためにはIT、プログラミング、起業について学ぶ必要があると感じ、現在の専門学校へ。卒業時の10月には団体を立ち上げたいと思っている。私が小学生の頃、近所のおじさんが飼い犬を殺してしまう悲しい出来事がありました。無抵抗のまま暴行を受け、お腹がパンパンの状態で亡くなっていたそうです。大型犬だったので本気で抵抗すれば飼い主を噛むことも逃げることもできたはずなのに、それをしなかったあの子の気持ちを思うと今でも涙が出ます。飼い犬を虐待しても殺しても殺処分しても罪に問われていない人はたくさんいます。そんな日本を少しでも変えていきたい。これがアニマルポリスを作りたいと思った最大の理由です。
					</p>
				</div>
			</section>
			<!-- // MESSAGE -->

			<section id="sec02">
				<header>
					<h2><span>活動報告</span></h2>
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
					<h2><span>譲渡会</span></h2>
				</header>
				<div class="inner">
					<ul class="col4">
						<li>
							<p class="img"><img src="images/logo01.png" width="168" height="168" alt=""></p>
							<p>ホームページサンプル株式会社では最動かす企業を目指します。</p>
						</li>
						<li>
							<p class="img"><img src="images/logo02.png" width="168" height="168" alt=""></p>
							<p>革新的な技術で世の中を動かす企業を目します。世の中を動かす。</p>
						</li>
						<li>
							<p class="img"><img src="images/logo03.png" width="168" height="168" alt=""></p>
							<p>株式会社では最動かす企業を目指しますージン企業を目指します。</p>
						</li>
						<li>
							<p class="img"><img src="images/logo04.png" width="168" height="168" alt=""></p>
							<p>株式会社では最動かす企業を指しますージサン企業を目指します。</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- // BRAND -->
			<!-- PROJECT -->
			<section id="sec04">
				<header>
					<h2><span>お問合わせ</span></h2>
				</header>
				<div class="inner">
					<div class="article">
						<img src="images/photo14.jpg" width="370" height="224" alt="">
						<p>ホームページ・運営に関するお問い合わせはこちら</p>
						<p>ホームページ・運営に関するお問い合わせはこちら</p>
						<p>ホームページ・運営に関するお問い合わせはこちら</p>
					</div>

					<div class="article">
						<img src="images/photo15.jpg" width="370" height="224" alt="">
						<p>動物虐待に関するSOSはこちら</p>
						<p>動物虐待に関するSOSはこちら</p>
						<p>動物虐待に関するSOSはこちら</p>
					</div>
				</div>
			</section>
			<!-- // PROJECT -->
			<!-- COMPANY -->
			<section id="sec05">
				<header>
					<h2><span>会社概要</span></h2>
				</header>
				<div class="inner">
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

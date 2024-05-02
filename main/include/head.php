<!doctype html>
<html lang="ko-KR">

<head>
	<meta charset="utf-8" />
	<!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no, viewport-fit=cover" /> -->
	<!-- [240118]sujeong / 확대, 축소 meta tag 수정 -->
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=5.0, minimum-scale=1, shrink-to-fit=no, viewport-fit=cover" />

	<title>KSSO 2024</title>

	<meta property="og:type" content="website">
	<meta property="og:title" content="2024 KSSO">
	<meta property="og:image" content="/main/img/poster2024_2.png" />

	<meta property="og:description" content="2024 KSSO hosted by KSSO">
	<meta name="description" content="2024 KSSO hosted by KSSO">
	<link rel="icon" href="../../favicon.ico">
	<!-- datepicker -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<!-- slick -->
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->

	<link rel="stylesheet" type="text/css" href="/main/js/slick/slick/slick.css" />  
	<!-- [240502] sujeong / theme 넣을 경우 css 깨짐 -->
    <!-- <link rel="stylesheet" type="text/css" href="/main/js/slick/slick/slick-theme.css" />-->

	<link rel="stylesheet" href="https://use.typekit.net/uwj4our.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/main/css/common.css?ver=<?= time() ?>">
	<link rel="stylesheet" href="/main/css/style.css?ver=<?= time() ?>">
	<link rel="stylesheet" href="/main/css/style2.css?ver=<?= time() ?>">
	<link rel="stylesheet" href="/main/css/style3.css?ver=<?= time() ?>">
	<link rel="stylesheet" href="/main/css/style4.css?ver=<?= time() ?>">
	<script src="/main/js/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

	<!-- [240502] sujeong / theme 넣을 경우 css 깨짐 -->
	<!-- <script src="/main/js/slick/slick/slick.js"></script> -->
    <script src="/main/js/slick/slick/slick.min.js" ></script>

	<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
	<script src="/main/js/style.js?ver=<?= time() ?>"></script>
	<script src="/main/js/config.js"></script>
	<script src="/main/js/common.js?ver=<?= time() ?>"></script>
	<script src="/main/js/en.js?ver=<?= time() ?>"></script>
	<script src="/main/js/ko.js?ver=<?= time() ?>"></script>
	<script src="/main/js/lang.js"></script>
	<script src="/main/js/jquery.zoomooz.min.js"></script>
	<script src="/main/js/locale.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKQQVTCGXJ"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-ZKQQVTCGXJ');
	</script>
</head>

<!-- sujeong font 추가 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet">

<!-- sujeong service-worker 추가 
	[231205]주석 추가
-->
<!-- <link rel="manifest" href="../../manifest.json">
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../../service-worker.js')
      .then(function(registration) {
        console.log('Service Worker registered with scope:', registration.scope);
      })
      .catch(function(error) {
        console.error('Service Worker registration failed:', error);
      });
  }
</script>-->

<body>
	<?php
	if (strpos($_SERVER["PHP_SELF"], "/main/") !== false) {
		include_once("./common/common.php");
	} else {
		include_once("./main/common/common.php");
	}

	// 230718 HUBDNC 위치 변경
	$_page_config = array(
		"m1" => [
			"Welcom Message"
		],
		"m2" => [
			"program_glance",
			"program_detail",
			"invited_speaker"
		],
		"m3" => [
			"poster_abstract_submission",
			"abstract_submission",
			"abstract_submission2",
			"abstract_submission3",
			"eposter",
			"lecture_note_submission",
			"lecture_submission",
			"lecture_submission2",
			"lecture_submission3",
			"oral_presenters",
			"eposter_presenters"
		],
		"m4" => [
			"registration_guidelines",
			"registration",
			"registration2",
			"registration3"
		],
		"m5" => [
			"sponsor_information",
			"application",
			"application_complete"
		],
		"m6" => [
			"accommodation",
			"attraction_historic",
			"useful_information"
		]
	);

	$_page = str_replace(".php", "", end(explode("/", $_SERVER["REQUEST_URI"])));

	//초록 마감 기간
	$sql_during =    "SELECT
							IF(DATE(NOW()) BETWEEN period_poster_start AND period_poster_end, 'Y', 'N') AS yn
						FROM info_event";
	$during_yn = sql_fetch($sql_during)['yn'];

	//오늘 날짜 구하기 d_day 구하기
	$today = date("Y. m. d");

	$d_day = new DateTime("2024-03-09");

	$current_date = new DateTime();
	$current_date->format('Y-m-d');

	$intvl = $current_date->diff($d_day);
	$d_days = $intvl->days;
	?>
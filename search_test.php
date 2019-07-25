<!DOCTYPE HTML>
<html lang="ja"> 
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=1243px" />

<meta name=”keywords” content=”aaaaa”>
<meta name="description" content="aaaaa" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src=""></script>

<link rel="stylesheet" type="text/css" href="css/common.css?ver3.3"  media="screen" />

<title> SATOW </title>
<link rel="shortcut icon" href="" />
<link rel="apple-touch-icon" href="" />

<script src="https://map.yahooapis.jp/js/V1/jsapi?appid=OY1oDxsr" type="text/javascript" charset="UTF-8"></script>
<script src="https://unpkg.com/yahoo-map-cluster@latest/bundle/ymap-cluster.js"></script>
<!--タッチ操作による地図スクロール・ピンチ操作による地図縮尺の変更（一部の端末機種のみの有効化-->
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">

</head>

<body>

<div class="wrap_all">
<div class="wrap_main">
<header>
	<h1><a href="index.html"><img class="header_img" src="images/common/common/logo.png" alt="header_img"></a></h1>
</header>

<!--
	<div id="page_back"></div>
	<div id="block_01"></div>
	<div id="block_02"></div>
-->


<section id="top_searching_block"><!-- searching area -->
	<div class="search area01 overlay">
		<div class="serach_free" id="form01">
			<form method="post" action="top2.php"><!-- cgi書き換えが必要 -->

 				<input class="input_here" type="text" name="comment1" value="" placeholder="駅名">
 	 			<input class="submit_btn" type="image" name="submit" src="images/common/common/submit_btn.png" hright="100px" alt="submit">
			</form>
			

		</div>
	</div>
		<!-- decorations -->
		<div class="d_layer layer_ye"></div>
		<div class="d_layer layer_gr"></div>
		<div class="d_layer layer_bl"></div>
		<div class="d_layer layer_re"></div>
</section><!-- searching area -->

<section id="bottom_links_block"><!-- link buttons -->
	<div class="links area02">
		<div class="search_btn link_01 search_location">
			<input class="location_btn" type="image" src="images/common/common/icon_location.png" alt="go_to_location">
			<div class="active no_nactive">
		</div></div>
		<div class="search_btn link_02 search_detail">
			<input class="detail_btn" type="image" src="images/common/common/icon_detail.png" alt="go_to_detail">
			<div class="active no_nactive">
		</div></div>
		<div class="search_btn link_03 search_random">
			<input class="random_btn" type="image" src="images/common/common/icon_random.png" alt="go_to_random">
			<div class="active no_nactive">
		</div></div>
		<div class="search_btn link_04 search_nypage">
			<input class="my_btn" type="image" src="images/common/common/icon_mypage.png" alt="go_to_mypage">
			<div class="active no_nactive">
		</div></div>
	</div>
</section><!-- link buttons -->




</div><!-- decorations end -->
<footer><img src="images/common/common/copyright.png" alt="copylight"></footer>
</div><!-- wrap_all end -->




<script type="text/javascript" charset="UTF-8">

$(function(){

 $('#block_01').load('blocks/top_searching_block.html');
 $('#block_02').load('blocks/bottom_links_block_a.html');

 });
 
 </script>


</body>
</html>

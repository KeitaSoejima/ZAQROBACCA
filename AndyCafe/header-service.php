<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHF7J6D');</script>
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="robots" content="index,follow">
<meta name="description" content="Andy Cafe のコンサルティングサービスなら、コロナ禍のペットブームにより需要が急増しているドッグサービスをワンストップで提供できるノウハウをマスターすることができます！">
<meta name="keywords" content="アンディカフェ,ドッグラン,ドッグカフェ,撮影,雑誌,テレビ,犬,ドッグサービス,目黒区,中町,ワンちゃん">
<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://andycafe.com/common/css/base.css" rel="stylesheet" type="text/css" media="all">
<link href="https://andycafe.com/common/css/top.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://andycafe.com/common/css/andyfarm.css" rel="stylesheet" />
<link href="https://andycafe.com/common/css/slick.css" rel="stylesheet" />
<link href="https://andycafe.com/common/css/slick-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="https://andycafe.com/wp-content/uploads/2019/07/favicon.ico">
<script src="https://andycafe.com/common/js/jquery.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.11.1/jquery.min.js"></script>
<script src="https://andycafe.com/photo_session_html/js/jquery.colorbox-min.js"></script>
<script src="https://andycafe.com/common/js/jquery.lib.js" type="text/javascript"></script>
<script src="https://andycafe.com/common/js/jquery.slick.min.js"></script>
<script src="https://andycafe.com/common/js/flexibility.js"></script>
<script src="https://andycafe.com/common/js/base.js"></script>
	<meta name="google-site-verification" content="sSqsLRc1Gi3jAqFVxLTZsDFjhb-WxwQsNvDZRWa5qek" />
<!--[if lt IE 9]>
     <script src="/common/js/html5shiv.js"></script>
<![endif]-->
<script>
	$(function() {
		$('#slideshow').slick({
			dots: true,
			appendDots:$("#slidenav"),
			autoplay: true,
			autoplaySpeed: 4000,
			fade: true,
			arrows: false,
		});
	});
//Shadowbox
Shadowbox.init();

//Shadowbox
$(function(){
$('.scroll_area').jScrollPane();
});
</script>
<script>
//画像単体
$(function() {
  $(".single").colorbox({
   maxWidth:"90%",
   maxHeight:"90%",
   opacity: 0.7
  });
});
$(function() {
  $(".iframe").colorbox({
    iframe:true,
    width:"90%",
    height:"90%",
    opacity: 0.7
});
});
</script>
<link href="https://andycafe.com/photo_session_html/style200318_31.css" rel="stylesheet">
<link href="https://andycafe.com/photo_session_html/css/colorbox.css" rel="stylesheet">
<script src="https://andycafe.com/photo_session_html/js/slick.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('.single-item').slick();
    $('.autoplay').slick({
      autoplay: true,
    });
  });
</script>
<?php wp_head(); ?>
</head>

<body id="to-top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHF7J6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

					$( function () {
						var accessToken = '7883627351.0986d4e.5d6f01c48d7f4e0985d8c9ae8ff8c6d9';
						var username = '7883627351'; // ユーザーID
						var curl = "https://api.instagram.com/v1/users/" + username + "/media/recent?access_token=" + accessToken + "&count=3";
						console.log( curl );
						$.ajax( {
							url: curl,
							dataType: 'jsonp',
							success: function ( data ) {
								console.log( data );
								for ( var i = 0; i < data[ 'data' ].length; i++ ) {
									// 近いusernameが複数出るので、一致するものを取得
									var obj = data[ "data" ][ i ];
									var src = obj.images.low_resolution.url;
									var link = obj.link;
									var like = "";
									var caption = "";
									$( "#instafeed" ).append( '<li><a href="' + link + '"><img src="' + src + '" target="_blank" /></a></li>' );
								}

							}
						} );


					} );
				</script>

<!-- wrapper -->
	<div id="wrapper">
		<header>
			<h1><a href="/"><img class="pc-on" src="https://andycafe.com/wp-content/uploads/2019/11/andylogo.png" width="168" alt="AndyCafe　アンディカフェ"><img class="sp-on" src="https://andycafe.com/wp-content/uploads/2020/05/andylogo-1.png" width="168" alt="AndyCafe　アンディカフェ"></a></h1>
			<div id="navToggle">
				<div>
					<span></span> <span></span> <span></span>
				</div>
			</div>
			<div class="header_inner">
				<div class="shop_nav">
				<ul>
					<li><a href="/meguro/">目黒本店</a></li>
					<li><a href="/nikotama/">二子玉川店</a></li>
					<li><a href="/gotokuji/">豪徳寺店</a></li>
					<li><a href="/asagaya/">阿佐ヶ谷店</a></li>
					<li><a href="/sasazuka/">笹塚店</a></li>
				</ul>
			</div>
			<ul class="header_nav">
				<li class="shop"><a href="https://andycafe.shop-pro.jp/?mode=srh&cid=&keyword=">Dog menu <br class="forPC">Online shop</a></li>
				<li><a href="/contact/">お問い合わせ</a></li>
				<li class="fc"><a href="https://andycafe.com/fcconsulting/">FC・コンサルティング</a></li>
			</ul>
</div>
		</header>

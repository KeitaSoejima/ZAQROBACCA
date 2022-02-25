<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title('｜', true, 'right'); ?></title>
    <!-- <meta name='robots' content='noindex,follow'> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="ワード, ワード">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 電話番号の自動リンクを無効にする -->
    <meta name="format-detection" content="telephone=no">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	  <!-- stylesheets -->

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo filemtime( get_stylesheet_directory() . '/style.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/slick.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css?v=2">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single20201126_01.css">

    <!-- Font -->
    <script>
      (function(d) {
        var config = {
          kitId: 'mzv6lxx',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144581489-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144581489-1');
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLJXWN6');</script>
<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="A4tZ7J-wIhv7dCzDP13DdD-94OyfxRHCMuB_8qzPqAM" />
	<script data-ad-client="ca-pub-5089482087511240" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php wp_head(); ?>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLJXWN6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="header">
  <a href="<?php bloginfo('url'); ?>/" class="header__logo">
    <img src="https://iekuru-dr.com/wp-content/uploads/2021/08/logo.png" alt="画像" class="header__logo__img">
    <div class="header__logo__textbox">
<?php if (is_home()) : ?>
      <h1>夜間往診サービスなら家来るドクター | 名古屋市の休日救急往診・訪問医療<br class="sp"></h1>
<?php else: ?>
      <h1><?php the_title(); ?><br class="sp"></h1>
<?php endif; ?>
      <p>家来るドクター</p>
    </div>
  </a>
	
  <!-- SPのグローバルナビゲーション -->
	<div class="headleft">
  <div class="menu-trigger js-toggle-menu md1">
    <span></span>
    <span></span>
    <span></span>
  </div>
	<div class="notopc">
			<p>取材の依頼はこちら</p>
			<p class="telhead">080-4533-1546</p>
		</div>
	<div>
		
		<div class="spnone">
 <a href="" class="nav__item__link nav__item__btn mh90">
          <img class="none950" src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="画像">
          <div class="nav__item__btntext">
<p class="nav__item__btntext__top">052-680-9999</p>
<p class="nav__item__btntext__bottom">受付時間:平日・土曜15:00～24:00<br>年中無休:日曜・祝日9:00～24:00</p>
          </div>
        </a>
          </div>
		
  <div><nav class="nav js-toggle-menu-target md1">
    <ul class="nav-menu">
      <li class="nav__item">
        <a href="/covid19/" class="nav__item__link">コロナ検査開始<span>Covid19</span></a>
      </li>
    <li class="nav__item">
        <a href="/reason/" class="nav__item__link">選ばれる理由<span>Reason</span></a>
      </li>
      <li class="nav__item">
        <a href="/about/" class="nav__item__link">家来るについて<span>About</span></a>
      </li>
      <li class="nav__item">
        <a href="/inspection/" class="nav__item__link">診療科目<span>Department</span></a>
      </li>
      <li class="nav__item">
        <a href="/flow/" class="nav__item__link">診療の流れ<span>Flow</span></a>
      </li>
     <!-- <li class="nav__item">
        <a href="/" class="nav__item__link">医師紹介<span>Staff</span></a>
      </li>-->
      <li class="nav__item">
        <a href="/fee/" class="nav__item__link">費用について<span>Price</span></a>
      </li>
      <li class="nav__item">
        <a href="/area/" class="nav__item__link">対応エリア<span>Access</span></a>
      </li>
    <li class="nav__item">
<a href="/faq/" class="nav__item__link">よくある質問<span>FAQ</span></a>
      </li>
		 <li class="nav__item">
<a href="/recruit/" class="nav__item__link">採用情報<span>Recruit</span></a>
      </li>
      <li class="nav__item">
        <a href="tel:050-8880-9898" class="nav__item__link nav__item__btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="画像">
          <div class="nav__item__btntext">
<p class="nav__item__btntext__top">050-8880-9898</p>
<p class="nav__item__btntext__bottom">受付時間:平日・土曜15:00~24:00<br>年中無休:日曜・祝日9:00~24:00</p>
          </div>
        </a>
      </li>
		 <li class="nav__item">
        <a href="tel:08045331546" class="nav__item__link nav__item__btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="画像">
          <div class="nav__item__btntext"><p class="nav__item__btntext__bottom">取材の依頼はこちらから</p>
<p class="nav__item__btntext__top">08045331546</p>
          </div>
        </a>
      </li>
    </ul>
  </nav></div>
	</div>
	</div>
  <!-- PCのグローバルナビゲーション -->
  <nav class="nav pc1">
    <ul class="nav__wrap">
      <li class="nav__item">
        <a href="/reason/" class="nav__item__link">選ばれる理由<span>Reason</span></a>
      </li>
      <li class="nav__item">
        <a href="/about/" class="nav__item__link">家来るについて<span>About</span></a>
      </li>
      <li class="nav__item">
        <a href="/inspection/" class="nav__item__link">診療科目<span>Department</span></a>
      </li>
      <li class="nav__item">
        <a href="/flow/" class="nav__item__link">診療の流れ<span>Flow</span></a>
      </li>
      <!--<li class="nav__item">
        <a href="/" class="nav__item__link">医師紹介<span>Staff</span></a>
      </li>-->
      <li class="nav__item">
        <a href="/fee/" class="nav__item__link">費用について<span>Price</span></a>
      </li>
      <li class="nav__item">
        <a href="/area/" class="nav__item__link">対応エリア<span>Access</span></a>
      </li>
     <li class="nav__item">
<a href="/faq/" class="nav__item__link">よくある質問<span>FAQ</span></a>
      </li>
      <li class="nav__item">
        <a href="" class="nav__item__link nav__item__btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="画像">
          <div class="nav__item__btntext">
<p class="nav__item__btntext__top">050-8880-9898</p>
<p class="nav__item__btntext__bottom">受付時間:平日・土曜15:00～24:00<br>年中無休:日曜・祝日9:00～24:00</p>
          </div>
        </a>
      </li>
    </ul>
  </nav>
</header>

	 <div class="flBtn-castingPc">
  <p><a href="https://line.me/R/ti/p/%40334vrolo" onclick="gtag('event', 'click1', {'event_category': 'linkclick','event_label': 'label'});"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_line_pc.png" alt="企業様お問い合わせ"></a></p>
		 <p><a href="/contact/"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_pc-mail.jpg" alt="企業様お問い合わせ"></a></p>
</div>
   <!-- <div id="s-box" class="flBtn-castingSp">
  <p><a href="https://line.me/R/ti/p/%40334vrolo"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_line_sp.png" alt="企業様お問い合わせ"></a></p>
		 <p><a href="tel:0526809999"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_sp-1.png" alt="企業様お問い合わせ"></a></p>
</div>-->

<!--<div class="test">
		<div class="test-content">
			<a href="#"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_call.png"></a>
			<a href="#"><img src="https://iekuru-dr.com/wp-content/uploads/2020/12/flowbutton_mail.png"></a>
		</div>
	</div> --!>
<?php get_header(); ?>
<main class="main inspection post">
  <h2 class="page-title">
    <img src="https://iekuru-dr.com/wp-content/themes/wizone_themes/assets/images/inspection/top.jpg" alt="" class="w-100p">
    <p><?php echo the_title(); ?><span>TITLE</span></p>
  </h2>

	<section class="section-width pt-80px pt-sp-60px blogwidth">
		<div class="blogtitle"><?php echo the_title(); ?></div>
		<?php
$d = "Y年m月d日";
$postdate = get_post_time( $d );
$update = get_post_modified_time( $d );
if( $postdate == $update ){ // 投稿の投稿日と最終更新日が同じ場合 
?>
	<p>投稿日：<time><?php echo $postdate; ?></time></p>
<?php
}else{ // 投稿の投稿日と最終更新日が異なる場合
?>
	<div class="inline"><ul class="flex001">
		<li class="mr20">投稿日：<time><?php echo $postdate; ?></time></li>
		<li>更新日時：<time><?php echo $update; ?></time></li>
		</ul></div>
<?php } ?>
		<!--<p><?php the_time('Y.n.d'); ?></p>-->
		<div class="feebox blogbox">
<?php the_content(); ?>
			<div class="btnbox001"><p><a href="https://page.line.me/334vrolo?openQrModal=true" rel="nofollow"><img src="https://iekuru-dr.com/wp-content/uploads/2021/07/bnr_line.png" alt="画像" ></a></p><p><a href="/contact/"><img src="https://iekuru-dr.com/wp-content/uploads/2021/07/bnr_mail.png" alt="画像" ></a></p><p class="sp-on"><a href="tel:050-8880-9898"><img src="https://iekuru-dr.com/wp-content/uploads/2021/07/bnr_tel.png" alt="画像" ></a></p></div>
</div></section></main>
<?php get_footer(); ?>
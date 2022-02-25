<div class="bgc-base">
<section class="section-width py-50px top-medicalrequest">
    <div class="top-medicalrequest__box mt-0">
      <div class="top-medicalrequest__left">
        <div class="top-medicalrequest__left__top">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-human.png" class="top-medicalrequest__left__top__img" alt="画像">
          <div class="top-medicalrequest__left__top__textbox">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-fukidashi.png" alt="画像">
            <p>往診のご相談・お問い合わせ<span>お気軽にお問い合わせください。</span></p>
          </div>
        </div>
		  <div class="footermid">
 <div class="nav__item__link nav__item__btnf fl">
          <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="画像">
          <div class="nav__item__btntext">
			  <p class="nav__item__btntext__top numbert"><a href="tel:050-8880-9898">050-8880-9898</a></p>
<p class="nav__item__btntext__bottom dayday">受付時間:平日・土曜15:00～24:00<br>年中無休:日曜・祝日9:00～24:00</p>
          </div>
        </div>
          </div>
        <div class="top-medicalrequest__left__bottom">
          <a href="/contact/" class="top-medicalrequest__left__bottom__btn top-medicalrequest__left__bottom__btn-white">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-mail.png" alt="画像">
            <p>メールフォーム</p>
          </a>
          <a href="https://line.me/R/ti/p/%40334vrolo" target="_blank" class="top-medicalrequest__left__bottom__btn top-medicalrequest__left__bottom__btn-green" onclick="gtag('event', 'click1', {'event_category': 'linkclick','event_label': 'label2'});">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-line.png" alt="画像">
            <p>LINEから相談</p>
          </a>
        </div>
      </div>
      <div class="top-medicalrequest__right">
<table>
<tr>
<th>診療時間</th>
<th>月曜~金曜</th>
<th>土曜</th>
<th>日曜・祝日</th>
</tr>
<tr>
<td>相談開始時間</td>
<td>15:00~24:00</td>
<td>15:00~24:00</td>
<td>9:00~24:00</td>
</tr>
<tr>
<td>往診開始時間<br>
(連携医療機関対応時間)
</td>
<td>19:00~25:00</td>
<td>18:00~25:00</td>
<td>10:00~25:00</td>
</tr>
</table>
<!--
      <div class="top-medicalrequest__right__row">
          <p class="f-bold">診療時間</p>
          <p class="f-bold">月曜~金曜</p>
          <p class="f-bold">土曜</p>
          <p class="f-bold">日曜・祝日</p>
        </div>
        <div class="top-medicalrequest__right__row">
          <p>相談開始時間</p>
          <p>15:00~24:00</p>
          <p>15:00~24:00</p>
          <p>9:00~24:00</p>
        </div>
        <div class="top-medicalrequest__right__row">
          <p>往診開始時間<br>(連携医療機関<br class="sp">対応時間)</p>
          <p>19:00~25:00</p>
          <p>18:00~25:00</p>
          <p>10:00~25:00</p>
        </div>
-->
      </div>
    </div>
  </section>
</div>

<div class="flbtn">
	<p><a href="tel:050-8880-9898" onclick="gtag('event', 'click1', {'event_category': 'linkclick','event_label': 'tel'});"><img src="https://iekuru-dr.com/wp-content/uploads/2021/03/tell-1.png" alt="画像"></a></p>
	<p><a href="/contact/"><img src="https://iekuru-dr.com/wp-content/uploads/2021/01/mailpng.png" alt="画像"></a></p>
	<p><a href="https://line.me/R/ti/p/%40334vrolo"  onclick="gtag('event', 'click1', {'event_category': 'linkclick','event_label': 'linesp'});"><img src="https://iekuru-dr.com/wp-content/uploads/2021/01/LINE.png" alt="画像"></a></p>
</div>
<div class="footerbox">
	<ul><li><a href="/reason/">選ばれる理由</a></li><li><a href="/about/">家来るについて</a></li><li><a href="/inspection/">診療科目</a></li><li><a href="/flow/">診療の流れ</a></li><li><a href="/fee/">費用について</a></li><li><a href="/area/">対応エリア</a></li><li><a href="/faq/">よくある質問</a></li><li><a href="/company/">会社概要</a></li></ul>
</div>
<footer class="footer">&copy; 2020 家来るドクター. all rights reserved.</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>

<script>
$(".qa-list dd").hide();
$(".qa-list dl").on("click", function(e){
    $('dd',this).slideToggle('fast');
    if($(this).hasClass('open')){
        $(this).removeClass('open');
    }else{
        $(this).addClass('open');
    }
});</script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://iekuru-dr.com/thanks/';
}, false );
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/area.js"></script>
<?php wp_footer(); ?>

</body>
</html>
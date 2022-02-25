<?php
/*
Template Name: photo_session
*/
?>

<?php get_template_part('header-photo_session'); ?>

<!-- #main start -->

<!-- main -->
<div id="main">
<main>

<?php if(is_page()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

</main>
</div>
<!-- #main end -->

<!-- #main start -->
<?php get_footer(); ?>
<?php get_header(); ?>


<?php if(is_page()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
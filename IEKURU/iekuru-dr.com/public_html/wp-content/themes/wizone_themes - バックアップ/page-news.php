<?php
/*
Template Name: news
*/
?>

<?php get_header(); ?>

<main class="main">

  <section class="top-news">
    <div class="section-width">
      <h2 class="section-title"><span>News</span>ニュース</h2>
      <div class="top-news__box">

  <?php
  $args = array(
    'posts_per_page' => 50, // 表示する投稿数
    'post_type' => array('news'), // 取得する投稿タイプのスラッグ
    'orderby' => 'date', //日付で並び替え
    'order' => 'DESC' // 降順 or 昇順
  );
  $my_posts = get_posts($args);
  ?>
  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

        <div class="top-news__item">
          <span class="top-news__item__date"><?php the_time('Y/m/d') ?></span>
          <span class="top-news__item__label">NEW</span>
          <span class="top-news__item__text"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></span>

        </div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
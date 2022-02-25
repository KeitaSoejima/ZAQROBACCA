<?php
/*
Template Name: area
*/
?>

<?php get_header(); ?>

<main class="main">

  <section class="top-area">
    <div class="section-width">
      <h2 class="section-title"><span>Area</span>エリア</h2>
      <div class="top-area__box">

  <?php
  $args = array(
    'posts_per_page' => 80, // 表示する投稿数
    'post_type' => array('area'), // 取得する投稿タイプのスラッグ
    'orderby' => 'date', //日付で並び替え
    'order' => 'DESC' // 降順 or 昇順
  );
  $my_posts = get_posts($args);
  ?>
  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

        <a href="<?php echo get_permalink($post->ID); ?>" class="top-area__item">
          <?php
        // アイキャッチ画像を取得
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'full');
        if (get_post_thumbnail_id($post->ID)) {
          echo '<figure><img src="' . $thumb_url[0] . '" alt="" class="top-area__item__img"></figure>';
        } else {
          // アイキャッチ画像が登録されていなかったときの画像
          echo '<figure></figure>';
        }
        ?>

          <p class="top-area__item__date"><?php the_time('Y/m/d') ?></p>
          <p class="top-area__item__title"><?php echo get_the_title($post->ID); ?></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-area-arrow.png" class="top-area__item__imglink">
        </a>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>

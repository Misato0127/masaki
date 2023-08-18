<?php get_header(); ?>

<main id="single" class="wrapper">
  <article>
    <h1 class="article-title"><?php the_title(); ?></h1>
    <p><?php the_time('Y/n/j'); ?></p>

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>

  <a class="link" href="<?php echo esc_url(home_url('/category/news/')); ?>">一覧に戻る</a>
</main>

<?php get_footer(); ?>
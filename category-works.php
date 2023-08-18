<?php get_header(); ?>

<main id="works" class="wrapper">
  <h1 class="page-title"><?php single_cat_title(); ?></h1>

  あああああ
  <?php if (have_posts()): ?>
    <ul class="list">
      <?php while(have_posts()):the_post(); ?>
        <li>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
          <p class="title"><?php the_title(); ?></p>
          <div class="content"><?php the_content(); ?></div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
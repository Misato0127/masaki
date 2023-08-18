<?php get_header(); ?>

<main id="news" class="wrapper">
  <h1 class="page-title"><?php single_cat_title(); ?></h1>

  <?php if (have_posts()): ?>
    <dl>
      <?php while(have_posts()):the_post(); ?>
        <dt><?php the_time('Y.m.d'); ?></dt>
        <dd>
          <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </dd>
      <?php endwhile; ?>
    </dl>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
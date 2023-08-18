<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <picture>
      <source media="(max-width: 600px)" srcset="<?php echo esc_url(get_theme_file_uri('img/mainvisual-sp.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual-pc.jpg')); ?>" alt="テキストテキストテキスト">
    </picture>
  </div>

  <div class="wrapper">
    <section id="works">
      <h2 class="sec-title">Works</h2>
      <ul>
        <?php
          $args = array(
            'posts_per_page' => 6,
            'category_name' => 'works'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <a class="link" href="<?php echo esc_url(home_url('/category/works/')); ?>">See More</a>
    </section>

    <section id="news">
      <h2 class="sec-title">News</h2>
      <dl>
        <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <dt><?php the_time('Y.m.d'); ?></dt>
          <dd><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></dd>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </dl>
      <a class="link" href="<?php echo esc_url(home_url('/category/news/')); ?>">See More</a>
    </section>
    <section class="top-form">
      <?php get_template_part('template/top-form'); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>
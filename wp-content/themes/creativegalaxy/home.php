<?php get_header(); ?>



<div class="container page-container">
  <div class="page-title">
    <h1 class="page-title-h"><?= get_the_title(78); ?></h1>
  </div>

  <div class="news-list">
    <ul class="news-list top-news-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <?php the_title(); ?>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
  </div>

  <?php wp_pagenavi(); ?>

</div>



<?php get_footer(); ?>
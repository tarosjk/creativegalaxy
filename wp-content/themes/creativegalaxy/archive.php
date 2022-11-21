<?php get_header(); ?>

<div class="container page-container">
  <div class="page-title">
    <h1 class="page-title-h">Works</h1>
  </div>

  <?php
    wp_nav_menu([
      'menu' => 'worksnav',
      'container' => '',
      'menu_class' => 'works-nav',
    ]);
  ?>
  <div class="works-list">

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="card works-item">
      <div class="card-img works-item-img">
        <a href="<?php the_permalink(); ?>">
          <?php if(has_post_thumbnail()): ?>
            <?= get_the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/eyecatch-dummy.png" alt="">
          <?php endif; ?>
        </a>
      </div>
      <div class="card-cat cat-link">
        <?= get_the_term_list(get_the_ID(), 'workscat'); ?>
      </div>
      <h3 class="card-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
    </article>
  <?php endwhile; endif; ?>

  </div>

  <?php wp_pagenavi(); ?>
  
</div>

<?php get_footer(); ?>
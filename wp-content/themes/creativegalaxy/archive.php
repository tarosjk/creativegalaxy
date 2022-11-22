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
    
    <?php get_template_part('templates/work-list'); ?>
  
  <?php endwhile; endif; ?>

  </div>

  <?php wp_pagenavi(); ?>
  
</div>

<?php get_footer(); ?>
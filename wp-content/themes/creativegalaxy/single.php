<?php get_header(); ?>

<div class="container page-container">
  <div class="page-title">
    <h1 class="page-title-h">News</h1>
  </div>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="news">
    <header class="news-header">
      <h1 class="news-title"><?php the_title(); ?></h1>
      <p>
        <time datetime="<?php the_time('Y-m-d'); ?>" class="news-date"><?php the_time('Y.m.d'); ?></time>
      </p>
    </header>
    <div class="news-content">
      <div class="news-eyecatch">
        <?php if( has_post_thumbnail() ): ?>
          <?= get_the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/eyecatch-dummy.png" alt="">
        <?php endif; ?>
      </div>
      <?php the_content(); ?>
    </div>
  </article>
  <?php endwhile; endif; ?>

  <div class="news-page-nav page-nav">
    <?php if(get_previous_post()): ?>
      <?= get_previous_post_link('%link'); ?>
    <?php endif; ?>
    <?php if(get_next_post()): ?>
      <?= get_next_post_link('%link'); ?>
    <?php endif; ?>
  </div>

  <div class="btn-container text-center">
    <a href="#" class="btn btn-normal">ニュース一覧へ戻る</a>
  </div>
</div>

<?php get_footer(); ?>
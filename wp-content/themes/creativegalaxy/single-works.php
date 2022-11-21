<?php get_header(); ?>

<div class="container page-container">
  <div class="page-title">
    <p class="page-title-h">Works</p>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="works-container">
        <h1 class="works-title"><?php the_title(); ?></h1>
        <div class="works-eyecatch">
          <?php if (has_post_thumbnail()) : ?>
            <?= get_the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/eyecatch-dummy.png" alt="">
          <?php endif; ?>
        </div>
        <div class="works-detail">
          <div class="works-cat cat-link">
            <?= get_the_term_list(get_the_ID(), 'workscat'); ?>
          </div>
          
          <div class="works-desc">
            <?php the_content(); ?>
          </div>

          <div class="works-gallery" id="works-gallery">
            <a href="./assets/img/works/work01-1.jpg" data-pswp-width="600" data-pswp-height="400" target="_blank">
              <img src="./assets/img/works/work01-1.jpg" alt="">
            </a>
            <a href="./assets/img/works/work01-2.jpg" data-pswp-width="600" data-pswp-height="400" target="_blank">
              <img src="./assets/img/works/work01-2.jpg" alt="">
            </a>
            <a href="./assets/img/works/work01-3.jpg" data-pswp-width="600" data-pswp-height="400" target="_blank">
              <img src="./assets/img/works/work01-3.jpg" alt="">
            </a>
          </div>
        </div>
      </article>
  <?php endwhile;
  endif; ?>

  <div class="page-nav works-page-nav">
    <a href="#" class="prev" rel="prev">前の作品</a>
    <a href="#" class="next" rel="next">次の作品</a>
  </div>
  <div class="btn-container text-center">
    <a href="#" class="btn btn-normal">Works一覧へ戻る</a>
  </div>
</div>

<?php get_footer(); ?>
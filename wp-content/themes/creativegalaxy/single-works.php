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

          <?php if( $gallery = SCF::get('works_gallery') ): ?>
          <div class="works-gallery" id="works-gallery">
            <?php foreach( $gallery as $img ): ?>
              <?php
                $img_src = wp_get_attachment_image_src($img['works_img'],'full');
              ?>
            <a href="<?= $img_src[0]; ?>">
              <img src="<?= $img_src[0]; ?>" alt="">
            </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

        </div>
      </article>
  <?php endwhile;
  endif; ?>

  <div class="page-nav works-page-nav">
    <?php if (get_previous_post()) : ?>
      <?= get_previous_post_link('%link'); ?>
    <?php endif; ?>
    <?php if (get_next_post()) : ?>
      <?= get_next_post_link('%link'); ?>
    <?php endif; ?>
  </div>
  <div class="btn-container text-center">
    <a href="<?= home_url(); ?>/works" class="btn btn-normal">Works一覧へ戻る</a>
  </div>
</div>

<?php get_footer(); ?>
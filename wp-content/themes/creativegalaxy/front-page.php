<?php get_header(); ?>
    <div class="mv" id="mv">
      <div><img src="https://picsum.photos/id/91/1600/900" alt="" class="mv-img"></div>
      <div><img src="https://picsum.photos/id/56/1600/900" alt="" class="mv-img"></div>
      <div><img src="https://picsum.photos/id/89/1600/900" alt="" class="mv-img"></div>
    </div>

    <section class="section top-about">
      <img src="https://picsum.photos/id/1056/1600/900" alt="" class="top-about-bg">
      <div class="container top-about-container">
        <p class="top-about-catch"><em>A Galaxy of <br>Possibilities</em></p>
        <p class="top-about-catch-sub"><strong>ギャラクシー級の可能性を求める</strong><br>
          無数の選択肢からお客さまのニーズへの最適解を導き出します
        </p>
      </div>
      <div class="btn-container">
        <a href="#" class="btn btn-normal">About Company</a>
      </div>
    </section>

    <section class="section top-works">
      <div class="container">
        <h2 class="section-h">Works</h2>
        <p class="section-lead">最新制作実績の紹介</p>
        <div class="top-works-list">
          <article class="card top-works-item">
            <div class="card-img">
              <a href="#"><img src="https://picsum.photos/id/1081/600/400" alt=""></a>
            </div>
            <ul class="card-cat cat-link">
              <li><a href="">abc</a></li>
              <li><a href="">xyz</a></li>
            </ul>
            <h3 class="card-title"><a href="#">Awesome Architect</a></h3>
          </article>
          <article class="top-works-item card">
            <div class="card-img">
              <a href="#"><img src="https://picsum.photos/id/1000/600/400" alt=""></a>
            </div>
            <ul class="card-cat cat-link">
              <li><a href="">abc</a></li>
              <li><a href="">xyz</a></li>
            </ul>
            <h3 class="card-title"><a href="#">Summit Church</a></h3>
          </article>
          <article class="top-works-item card">
              <div class="card-img">
                <a href="#"><img src="https://picsum.photos/id/953/600/400" alt=""></a>
              </div>
              <ul class="card-cat cat-link">
                <li><a href="">abc</a></li>
                <li><a href="">xyz</a></li>
              </ul>
              <h3 class="card-title"><a href="#">Distroted Library</a></h3>
          </article>
        </div>
        <div class="btn-container text-center">
          <a href="#" class="btn btn-normal">view more</a>
        </div>
      </div>
    </section>

    <section class="section top-news">
      <div class="container">
        <h2 class="section-h">News</h2>
        <ul class="news-list top-news-list">
          <?php
          $news_items = new WP_Query([
            'post_type' => 'post', //投稿のデータを取得(省略可)
            'orderby' => 'date', //並び順は日付で(省略可)
            'order' => 'DESC', //降順(省略可)
            'posts_per_page' => 3 //3件取得(デフォルトは確か5)
          ]);
          ?>
          <?php if($news_items->have_posts()): while($news_items->have_posts()): $news_items->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <?php the_title(); ?>
            </a>
          </li>
          <?php endwhile;
          wp_reset_postdata();//$postの内容をメインクエリの内容に戻す
        endif; ?>
        </ul>
        <div class="btn-container text-center">
          <a href="<?= get_the_permalink(78); ?>" class="btn btn-normal">view more</a>
        </div>
      </div>
    </section>

    <section class="top-contact">
      <div class="container top-contact-container">
        <h2 class="top-contact-h">
          Contact
          <span>お問い合わせ</span>
        </h2>
        <p class="top-contact-text">
          Creative Galaxyのご相談やご質問が<br>
          ありましたら、お気軽にお問い合わせください。
        </p>
        <div class="top-contact-btn-area">
          <a href="#" class="btn btn-normal btn-white">お問い合わせフォーム</a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
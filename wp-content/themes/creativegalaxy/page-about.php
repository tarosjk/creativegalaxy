<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="about-mv">
      <div class="container about-mv-catch">
        <div class="about-mv-catch-text">
          <h1 class="about-mv-h">A Galaxy of <br>Possibilities</h1>
          <p class="about-mv-catch-sub">ギャラクシー級の可能性を求める<br>無数の選択肢からお客さまのニーズへの最適解を導き出します
          </p>
          <p class="about-mv-catch-subtext">
            情報革命からインターネットに連なる時代のうねりは、人々の生活を一変させました。そして、その変化の側にはいつでも人々の要望に応える形で素晴らしいプロダクトが存在していました。
          </p>

          <p class="about-mv-catch-subtext">私たちCreative Galaxyは、ユーザーニーズを満たす利便性を備え、使いやすくデザインされたプロダクトこそ、世の中を変えることができると考えています。
          </p>
        </div>
        <div class="about-mv-catch-photo">
          <img src="https://picsum.photos/id/20/600/900" alt="">
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>
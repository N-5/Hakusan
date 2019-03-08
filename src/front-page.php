<?php get_header(); ?>

<main id="index">
	<section class="index-hero">
      <h1 class="index-hero__heading" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/img/top/index-hero__logo.png" alt="自然と遊ぼう!!LET'S ENJOYHAKUSAN"></h1>
	</section>
	
    <section class="index-about">
      <div class="index-about__inner l-container">
        <h2 class="index-about__heading index-section__heading"><span>活力ある地域づくりを<br class="sm_max">目指して</span><br><span>株式会社白山瀬波</span></h2>
        <div class="index-about__bird">
          <picture>
            <source media="(max-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/index-about__bird__sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/index-about__bird__pc.png" alt="bird">
          </picture>
        </div>
	  </div>
      <div class="index-about__linkarea">
        <div class="index-about__linkarea-list">
          <div class="index-about__linkarea-list__item">
            <a href="<?php echo home_url(); ?>/company/">
              <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/top/index-about__linkarea_2.jpg" alt=""></div>
              <div class="title">清流の郷 <br class="lg_max">瀬波川キャンプ場</div>
              <div class="copy">緑豊かな大地と、清らかな水に恵まれた<br>瀬波川キャンプ場。<br class="md">イベント情報やご予約のお申し込みはこちらから。</div>
            </a>
          </div>
          <div class="index-about__linkarea-list__item">
              <a href="<?php echo home_url(); ?>/company/">
                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/top/index-about__linkarea_1.jpg" alt=""></div>
                <div class="title">企業情報</div>
                <div class="copy">株式会社白山瀬波の会社概要です。</div>
              </a>
          </div>
        </div>
      </div>
	</section>

	<section class="index-topics">
	  <div class="index-topics__inner">
        <div class="index-topics__title">
          <p class="en">TOPICS</p>
          <h2 class="jp"><span>トピックス</span></h2>
        </div>
        <div class="index-topics-list">
          <article class="index-topics-list__item">
            <a href="">
              <div class="time"><time>2018.12.18</time></div>
              <div class="detail">
                <div class="title">タイトルが入ります。タイトルが入ります。</div>
                <div class="category">カテゴリ</div>
              </div>
            </a>
          </article>
        </div>
	  </div>
      <div class="m-link"><a href="">一覧を見る</a></div>
	</section>

	<section class="index-access">
	  <div class="index-access__inner">
        <h2 class="index-section__heading">アクセス情報</h2>
        <div class="index-access__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.726793342711!2d136.65577651527633!3d36.318931580050574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff85d5dacbcd0f1%3A0xbaf25157e83055ae!2z44CSOTIwLTIzMjMg55-z5bed55yM55m95bGx5biC54Cs5rOi5a2Q77yR77yZ!5e0!3m2!1sja!2sjp!4v1551691227137" frameborder="0" style="border:0" allowfullscreen></iframe>
          <div class="index-access__decoration"><img src="<?php echo get_template_directory_uri(); ?>/img/top/index-map__decoration.png" alt=""></div>
        </div>
	  </div>
	</section>
</main>

<?php get_footer(); ?>

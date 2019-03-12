<?php
/*
Template Name: reserve-confirm
*/
?>
<?php get_header(); ?>
<main id="contact">
  <section class="contact-form">
    <div class="l-container__small">
      <h1 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>ご予約</span></h1>
      <div class="contact-form__lead" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <p class="u-m">以下の内容をお確かめの上、「送信」ボタンをクリックして下さい。</p>
     </div>
      <div class="contact-form__input" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
       <?php while(have_posts()): the_post(); ?>
       <?php the_content(); ?>
       <?php endwhile; ?>
     </div>
   </div>
  </section>
</main>
<?php get_footer(); ?>

<?php
/*
Template Name: reserve
*/
?>
<?php get_header(); ?>
<main id="contact">
  <section class="contact-form">
    <div class="l-container__small">
      <h1 class="m-page-title"><span>ご予約</span></h1>
      <div class="contact-form__lead">
        <p class="u-m">※お名前、ご連絡先（電話番号もしくはメールアドレス）、お問合せ内容は必ずご記入ください。</p>
     </div>
     <div class="contact-form__input">
       <?php while(have_posts()): the_post(); ?>
       <?php the_content(); ?>
       <?php endwhile; ?>
     </div>
   </div>
  </section>
</main>
<?php get_footer(); ?>

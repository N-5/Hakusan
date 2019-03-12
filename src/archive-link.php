<?php get_header(); ?>
<main id="link">
  <section class="link-archive">
    <div class="l-container">
      <h1 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>リンク集</span></h1>
      <ul class="l-col4 m-block-list" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <?php if(have_rows('link')): ?>
        <?php while(have_rows('link')): the_row(); ?>
        <li class="l-col4__item m-block-list__item">
          <a href="<?php the_sub_field('link-url'); ?>" target="_blank" rel="nofollow"><?php the_sub_field('link-title'); ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>

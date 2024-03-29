<?php get_header(); ?>
<main id="topics">
  <div class="l-container">
    <div class="topics-single">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h2 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>トピックス</span></h2>
      <header data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="topics-header">
          <h1 class="topics-header__heading"><?php the_title() ?></h1>
          <div class="topics-header__category">
            <?php $custom_post_tag = 'topics-category';
            $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
            if(!empty($custom_post_tag_terms)){
              if(!is_wp_error( $custom_post_tag_terms )){
                foreach($custom_post_tag_terms as $term){
                  $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                  $tag_term_name = $term->name;
                  echo '<div class="item"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></div>';
                }
              }
            }
            ?>
          </div>
        </div>
        <div class="topics-time"><time><?php the_time('Y.m.d'); ?></time></div>
      </header>
      <div class="c-postarea" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <?php the_content() ?>
      </div>
      <div class="c-paging" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="c-paging__prev">
        <?php $next_post = get_next_post();  
          if (!empty( $next_post )):  
            echo '<a href="',get_permalink( $next_post->ID ),'"><span>前へ</span></a>';  
          endif; ?>
        </div>
        <div class="c-paging__next">
          <?php $prev_poxt = get_previous_post();  
          if (!empty( $prev_poxt  )):  
            echo '<a href="',get_permalink( $prev_poxt->ID ),'"><span>次へ</span></a>';  
          endif; ?>
        </div>
      </div>
      <div class="topics-btn" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="m-link"><a href="<?php echo home_url(); ?>/topics/">一覧へ</a></div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>

<?php get_header(); ?>
<main id="topics">
  <section class="topics-archive">
    <div class="l-container">
      <h1 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>トピックス</span></h1>
      <div class="c-topics" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="c-topics-list__item">
          <a href="<?php the_permalink() ?>">
            <div class="time"><time><?php the_time('Y.m.d'); ?></time></div>
            <div class="detail">
              <div class="title"><?php the_title(); ?></div>
              <div class="category">
                <div class="category">
                  <?php $custom_post_tag = 'topics-category';
                  $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
                  if(!empty($custom_post_tag_terms)){
                    if(!is_wp_error( $custom_post_tag_terms )){
                      foreach($custom_post_tag_terms as $term){
                        $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                        $tag_term_name = $term->name;
                        echo '<div class="item">'.$tag_term_name.'</div>';
                      }
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </a>
        </article>
        <?php endwhile; ?>
      </div>
      <div class="c-pagination" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
        <?php global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');;
          $paginate_base .= '%_%';
        }
        echo paginate_links( array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $wp_query->max_num_pages,
          'mid_size' => 5,
          'current' => ($paged ? $paged : 1),
        )); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

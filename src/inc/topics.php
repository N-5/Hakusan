<section class="c-topics">
  <div class="c-topics__inner">
    <div class="c-topics__title" data-aos="fade-up" data-aos-delay="200">
      <p class="en">TOPICS</p>
      <h2 class="jp"><span>トピックス</span></h2>
    </div>
    <div class="c-topics-list" data-aos="fade-up" data-aos-delay="400">
      <?php
      $args = array(
        'post_type' => 'topics',
        'post_status' => 'publish',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
      <article class="c-topics-list__item">
        <a href="<?php the_permalink() ?>">
          <div class="time"><time><?php the_time('Y.m.d'); ?></time></div>
          <div class="detail">
            <div class="title"><?php the_title(); ?></div>
            <div class="category">
              <div class="cat">
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
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="m-link" data-aos="fade-up" data-aos-delay="600"><a href="<?php echo home_url(); ?>/topics/">一覧を見る</a></div>
</section>
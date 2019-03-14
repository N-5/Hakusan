<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>
<main id="company">
  <section class="company-information">
    <div class="l-container">
      <h1 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>企業情報</span></h1>
      <h3 class="m-block-title" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">会社概要</h3>
      <table class="c-table__col2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
        <tbody class="c-table-list">
          <tr class="c-table-list__item">
            <th class="title">社名（商号）</th>
            <td class="detail">株式会社白山瀬波 <br>Hakusan Senami Company Limited</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">所在地</th>
            <td class="detail">〒920-2323 <br class="u-sm_max">石川県白山市瀬波子19番地5<br class="u-sm_max">（ｲｼｶﾜｹﾝ ﾊｸｻﾝｼ ｾﾅﾐ ﾈ 19ﾊﾞﾝﾁ 5）</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">代表者</th>
            <td class="detail">代表取締役社長<br class="u-sm_max"> 西原 秀幸</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">設立</th>
            <td class="detail">2015年10月</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">資本金</th>
            <td class="detail">5,000千円</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">グループ企業</th>
            <td class="detail">株式会社 ACKグループ、<br class="u-sm_max">株式会社 中央設計技術研究所</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">主要取引先</th>
            <td class="detail">北國銀行、JAバンク</td>
          </tr>
          <tr id="access" class="c-table-list__item">
            <th class="title">事業内容</th>
            <td class="detail">
              <ul class="m-block-list">
                <li class="m-block-list__item">キャンプ場等の交流施設の運営管理</li>
                <li class="m-block-list__item">公共施設の運営管理</li>
                <li class="m-block-list__item">農作物、山菜、川魚、薪、炭の販売</li>
                <li class="m-block-list__item">白山麓の土産品の販売</li>
                <li class="m-block-list__item">各種催事等のイベント、<br class="u-sm_max">学校野外活動の支援活動</li>
                <li class="m-block-list__item">森林環境保全、公共施設保全、害獣駆除、<br class="u-sm_max">一般修繕工事などの委託業務</li>
                <li class="m-block-list__item">上記の附帯する又は関連する一切の事業</li>
              </ul>
            </td>
          </tr>
          <tr class="c-table-list__item access">
            <th class="title">アクセスマップ</th>
            <td class="detail">
              <p class="access-text">石川県白山市瀬波子19番地5</p>
              <div class="access-img"><img src="<?php echo get_template_directory_uri(); ?>/img/company/company-information_1.png" alt=""></div>
              <div class="access-img"><img src="<?php echo get_template_directory_uri(); ?>/img/company/company-information_2.png" alt=""></div>
              <div class="access-google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.726793342711!2d136.65577651527633!3d36.318931580050574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff85d5dacbcd0f1%3A0xbaf25157e83055ae!2z44CSOTIwLTIzMjMg55-z5bed55yM55m95bGx5biC54Cs5rOi5a2Q77yR77yZ!5e0!3m2!1sja!2sjp!4v1551691227137" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="m-link__text"><a href="https://www.google.com/maps?ll=36.318932,136.657965&z=16&t=m&hl=ja&gl=JP&mapclient=embed&q=%E3%80%92920-2323+%E7%9F%B3%E5%B7%9D%E7%9C%8C%E7%99%BD%E5%B1%B1%E5%B8%82%E7%80%AC%E6%B3%A2%E5%AD%90%EF%BC%91%EF%BC%99" target="_blank">Google Mapで開く</a></div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  
  <section class="c-topics">
    <div class="c-topics__inner">
      <div class="c-topics__title" data-aos="fade-up" data-aos-delay="200">
        <p class="en">TOPICS</p>
        <h2 class="jp"><span>トピックス</span></h2>
      </div>
      <div class="c-topics-list" data-aos="fade-up" data-aos-delay="300">
        <?php
        $args=array(
          'tax_query' => array( 
            array(
              'taxonomy' => 'topics-category',
              'field' => 'slug',
              'terms' => array( 'information' )
            ),
          ),
          'post_type' => 'topics',
          'posts_per_page'=> 6
        );
        ?>
        <?php query_posts( $args ); ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <article class="c-topics-list__item">
          <a href="<?php the_permalink() ?>">
            <div class="time"><time><?php the_time('Y.m.d'); ?></time></div>
            <div class="detail">
              <div class="title"><?php the_title(); ?></div>
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
          </a>
        </article>
        <?php endwhile; else: ?>
        <p>投稿がありません。</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <div class="m-link" data-aos="fade-up" data-aos-delay="400"><a href="<?php echo home_url(); ?>/topics/topics-category/information/">一覧を見る</a></div>
  </section>
  
  <section class="company-pdf">
    <div class="l-container">
      <h2 class="m-block-title" data-aos="fade-up" data-aos-delay="200">年間行事の報告書PDF</h2>
      <p class="u-m" data-aos="fade-up" data-aos-delay="300">ダウンロードはこちら</p>
      <div class="m-link" data-aos="fade-up" data-aos-delay="400"><a href="<?php echo get_template_directory_uri(); ?>/pdf/camp_form.pdf">PDF</a></div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

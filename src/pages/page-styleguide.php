<?php
/*
Template Name: styleguide
*/
?>
<?php get_header(); ?>
<main id="styleguide">
  <section class="b1">
    <h1 class="m-page-title"><span>ページタイトル</span></h1>
    <div class="l-container">
     <div class="b1-container">
       <h2 class="m-section-title">セクションタイトル</h2>
       <h3 class="m-block-title">ブロックタイトル</h3>
       <h4 class="m-card-title">カードタイトル</h4>
       <h3 class="m-block-title__border">ブロックタイトル</h3>
       <ul class="m-block-list">
         <li class="m-block-list__item">リスト</li>
         <li class="m-block-list__item">リスト</li>
         <li class="m-block-list__item">リスト</li>
         <li class="m-block-list__item">リスト</li>
         <li class="m-block-list__item"><a href="">リスト</a></li>
       </ul>
       <div class="m-link"><a href="">詳しく見る</a></div>
       <div class="m-link__border"><a href="">詳しく見る</a></div>
       <div class="m-link__text"><a href="">詳しく見る</a></div>
       <div class="c-pagination">
         <a class="prev page-numbers" href="">前へ</a>
         <span class="page-numbers current">1</span>
         <a class="page-numbers" href="">2</a>
         <a class="page-numbers" href="">3</a>
         <a class="page-numbers" href="">4</a>
         <a class="page-numbers" href="">5</a>
         <a class="next page-numbers" href="">次へ</a>
       </div>
     </div>
    </div>
  </section>
  
  <section class="b2">
    <div class="l-container">
      <div class="breadcrumbs">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
      </div>
      <div class="l-col2">
        <div class="l-col2__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col2__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
      </div>
      <div class="l-col3">
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
      </div>
      <div class="l-col4">
        <div class="l-col4__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col4__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col4__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
        <div class="l-col4__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="b3">
    <div class="l-container">
      <div class="l-align">
        <div class="l-align__image"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div></div>
        <div class="l-align__text">
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
      </div>
      <div class="l-align l-reverse">
        <div class="l-align__image"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div></div>
        <div class="l-align__text">
          <div class="title m-block-title">タイトルが入ります</div>
          <div class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="b4">
    <div class="l-container">
      <p class="u-xl">u-el<br>フォントサイズ１8pxです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p class="u-l">u-l<br>フォントサイズ１6pxです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p class="u-m">u-m<br>標準フォントサイズ１４pxです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p class="u-s">u-s<br>フォントサイズ１２pxです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p class="u-es">u-es<br>フォントサイズ１0pxです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <table class="c-table__col2">
        <tbody class="c-table-list">
          <tr class="c-table-list__item">
            <th class="title">テキスト</th>
            <td class="detail">テキストテキストテキストテキストテキスト</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">テキスト</th>
            <td class="detail">テキストテキストテキストテキストテキスト</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</main>
<?php get_footer(); ?>

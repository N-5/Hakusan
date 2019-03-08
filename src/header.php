<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="l-wrapper">
      <header id="header" class="header">
        <div class="header-inner">
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-logo.png" alt="<?php bloginfo('name'); ?>"></a>
          </div>
          <nav class="header-navigation" data-menu-navigation>
            <ul class="header-navigation-list">
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/company/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon1_off.png"></i><span>企業情報</span></a></li>
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/camp/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon2_off.png"></i><span>キャンプ場</span></a></li>
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/access/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon3_off.png"></i><span>アクセス</span></a></li>
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/topics/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon4_off.png"></i><span>トピックス</span></a></li>
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/contact/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon5_off.png"></i><span>お問い合わせ</span></a></li>
              <li class="item" data-hover-img><a href="<?php echo home_url(); ?>/link/"><i><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-icon6_off.png"></i><span>リンク集</span></a></li>
            </ul>
          </nav>
          <div class="header-hamburger" data-menu-hamburger>
            <div class="header-hamburger-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-humberger-menu.png" alt="MENU"></div>
            <div class="header-hamburger-close"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header-humberger-close.png" alt="CLOSE"></div>
          </div>
        </div>
      </header>

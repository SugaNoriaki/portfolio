<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/vendors/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/vendors/swiper.min.css" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  </head>
  <body>
    <div id="opening-msg">
      <div class="animate-title inview">貴方の時間、何に使っていますか？</div>
    </div>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="header-trigger"></div>
        <header class="header">
          <div class="header__inner">
            <a href="<?php bloginfo('url'); ?>/index">
              <div class="logo">
                <span class="nori">Nori</span>
                <span>の部屋</span>
              </div>
            </a>
            <nav class="header__nav">
              <ul class="header__ul">
               <?php wp_nav_menu( array(
               'theme_location'=>'place_global', 
               'container'     =>'', 
               'menu_class'    =>'',
               'items_wrap' => '%3$s',
                ));?>
              </ul>
            </nav>
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <?php wp_head(); ?>
        </header>
    
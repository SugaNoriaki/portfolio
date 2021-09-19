
          <footer class="footer">
            <a href="<?php bloginfo('url'); ?>/index">
              <div class="logo">
                <span class="nori">Nori</span>
                <span>の部屋</span>
              </div>
            </a>
            <nav class="footer__nav">
              <ul class="footer__ul">
                <li class="footer__li"><a href="<?php bloginfo('url'); ?>/habits">習慣</a></li>
                <li class="footer__li"><a href="<?php bloginfo('url'); ?>/reading">読書</a></li>
                <li class="footer__li"><a href="<?php bloginfo('url'); ?>/morning-routine">朝活</a></li>
                <li class="footer__li"><a href="<?php bloginfo('url'); ?>/training">運動</a></li>
                <li class="footer__li"><a href="<?php bloginfo('url'); ?>/english">英語</a></li>
              </ul>
              <div class="footer__copyright item">&copy; Noriaki Suga</div>
            </nav>
          </footer>
      </div>
      <nav class="mobile-menu">
        <div class="logo">
          <span class="nori">Nori</span>
          <span>の部屋</span>
        </div>
        <ul class="mobile-menu__main">
          <li class="mobile-menu__item">
            <span class="main-title">
              <a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/index">Home</a>
            </span>
          </li>
          <li class="mobile-menu__item">
            <span class="mobile-menu__link">
              <span class="main-title">Contents</span>
              <ul>
                <li><a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/habits">~習慣~</a></li>
                <li><a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/reading">~読書~</a></li>
                <li><a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/morning-routine">~朝活~</a></li>
                <li><a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/training">~運動~</a></li>
                <li><a class="mobile-menu__link" href="<?php bloginfo('url'); ?>/english">~英語~</a></li>
              </ul>
            </span>
          </li>
        </ul>
      </nav>
    </div>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/vendors/swiper.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/openingMsg.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/text-animation.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/mobile-menu.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/hero-slider.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/displayTime.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/main.js"></script>
<?php wp_footer(); ?>
  </body>
</html>

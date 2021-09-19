<?php get_header(); ?>
        <div class="index-cheaker"></div>
        <div id="content">
          <div class="hero">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">習慣</div>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/time.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">読書</div>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/book.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">朝活</div>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/morning-routine.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">運動</div>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/training.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">英語</div>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/learning.jpg" alt="" />
                </div>
              </div>
              <div class="hero__footer">
                <img class="hero__downarrow" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/arrow.svg" />
                <span class="hero__scrolltext">scroll</span>
              </div>
            </div>
          </div>
          <div id="main-content">
            <section class="message">
              <div class="message__main">
                <time id="time"></time>
                <div class="message__sub-title apper-up">
                  『貴方の時間、何に使っていますか？』
                </div>
              </div>
              <div class="message__txt apper-up">
                スマホ、SNS、Youtube、サブスク。<br />
                日々の貴方の大事な時間を、これらで、ただ何となく消費していませんか？<br />
                ある実態調査によると、約35％の人々が1日平均『2時間以上4時間未満』<br />
                の時間をスマホに費やしています。<br />
                これらが全て悪いと言っているわけではありません。<br />
                ただ、その時間のほんの少しを貴方自身に使ってみませんか？
              </div>
            </section>
            <section class="action">
              <div class="main-title">Recommend actions</div>
              <div class="sub-title">〜具体的な行動〜</div>
              <div class="action__container">
                <div class="action__content slide-in-left">
                  <div class="action__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/time.jpg" alt="" />
                  </div>
                  <div class="action__inner">
                    <div class="action__title">習慣</div>
                    <div class="action__sub-title">
                      〜理想の生活サイクルを作りましょう〜
                    </div>
                    <div class="action__btn">
                      <a href="<?php bloginfo('url'); ?>/habits">
                        <button class="btn slide-bg item">Let's action</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="action__content slide-in-left">
                  <div class="action__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/book.jpg" alt="" />
                  </div>
                  <div class="action__inner">
                    <div class="action__title">読書</div>
                    <div class="action__sub-title">
                      〜最高の一冊を見つけましょう〜
                    </div>
                    <div class="action__btn">
                      <a href="<?php bloginfo('url'); ?>/reading">
                        <button class="btn slide-bg item">Let's action</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="action__content slide-in-left">
                  <div class="action__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/training.jpg" alt="" />
                  </div>
                  <div class="action__inner">
                    <div class="action__title">運動</div>
                    <div class="action__sub-title">
                      〜生活に運動を取り入れましょう〜
                    </div>
                    <div class="action__btn">
                      <a href="<?php bloginfo('url'); ?>/training">
                        <button class="btn slide-bg item">Let's action</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="action__content slide-in-left">
                  <div class="action__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/morning-routine.jpg" alt="" />
                  </div>
                  <div class="action__inner">
                    <div class="action__title">朝活</div>
                    <div class="action__sub-title">
                      〜自分の時間を作りましょう〜
                    </div>
                    <div class="action__btn">
                      <a href="<?php bloginfo('url'); ?>/morning-routine">
                        <button class="btn slide-bg item">Let's action</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="action__content slide-in-left">
                  <div class="action__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/learning.jpg" alt="" />
                  </div>
                  <div class="action__inner">
                    <div class="action__title">英語</div>
                    <div class="action__sub-title">〜自己研鑽しましょう〜</div>
                    <div class="action__btn">
                      <a href="<?php bloginfo('url'); ?>/english">
                        <button class="btn slide-bg item">Let's action</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
<?php get_footer(); ?>
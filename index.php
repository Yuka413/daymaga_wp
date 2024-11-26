<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DayMaga</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="l-header">
      <div class="l-header__inner">
        <div class="l-header__body">
          <div class="l-header__content l-header-content">
            <p class="l-header-content__main">ビジネスの未来を切り拓く。</p>
            <h1 class="l-header-content__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="DayMaga" />
            </h1>
            <p class="l-header-content__sub">
              コンサルティングの専門情報メディア
            </p>
          </div>
          <div class="l-header-content__scroll-wrapper js-header-scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" class="l-header__content--scroll-symbol">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="l-header__content--scroll-logo">
          </div>
          <div class="l-header__menu">
            <button
              id="js-drawer-icon"
              class="l-header__menu--open l-drawer-icon"
            >
              <span class="l-drawer-icon__bar"></span>
              <span class="l-drawer-icon__bar"></span>
              <span class="l-drawer-icon__bar"></span>
            </button>
            <a href="#" class="l-header-nav__search"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt=""
            /></a>
          </div>
          <nav class="l-header__lists">
            <div class="l-header__lists-heading">
              <a href="#current" class="l-header-list">新着情報</a>
              <a href="#tips" class="l-header-list">TIPS</a>
              <a href="#interview" class="l-header-list">インタビュー</a>
              <a href="#news" class="l-header-list">ニュース</a>
            </div>
            <div class="l-header__lists-button">
              <a href="" class="l-header-list l-btn">
                <div class="l-btn__sub-text">コンサルをお探しの企業様</div>
                <div class="l-btn__main-text">まずは無料相談</div>
              </a>
              <a href="" class="l-header-list l-btn">
                <div class="l-btn__sub-text l-btn__sub-text--reverse">
                  コンサルタントの方
                </div>
                <div class="l-btn__main-text l-btn__main-text--reverse">
                  案件の紹介登録
                </div>
              </a>
            </div>
            <a href="" class="l-header-list__search"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt=""
            /></a>
          </nav>
        </div>
        <div id="js-drawer-content" class="l-drawer-content">
        <button
              id="js-drawer-icon-close"
              class="l-header__menu-close l-drawer-content__icon-close js-drawer-click"
            >
              <span class="l-drawer-content__bar-close"></span>
              <span class="l-drawer-content__bar-close"></span>
            </button>
          <nav class="l-drawer-content__menu">
            <a href="#current" class="l-drawer-content__link js-drawer-click">新着情報</a>
            <a href="#tips" class="l-drawer-content__link js-drawer-click">TIPS</a>
            <a href="#interview" class="l-drawer-content__link js-drawer-click">インタビュー</a>
            <a href="#news" class="l-drawer-content__link js-drawer-click">ニュース</a>
            <a href="#" class="l-drawer-content__search js-drawer-click"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt=""
            /></a>
          </nav>
        </div>
      </div>
    </header>

    <section class="p-gallery">
      <div class="p-gallery__inner">
        <div class="p-gallery__slide">
          <!-- Slider main container -->
          <div class="swiper p-gallery__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-gallery__slide">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev p-gallery__prev"></div>
            <div class="swiper-button-next p-gallery__next"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="current" class="p-current">
      <div class="p-current__inner">
        <h2 class="c-title p-current__title">
          <div class="c-title__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
          </div>
          <div class="c-title__text">新着情報</div>
        </h2>
        <div class="p-current__cards">
          <a href="" class="c-post">
            <div class="c-post__card">
              <div class="c-post__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
              </div>
              <div class="c-post__content">
                <div class="c-post__date">2024.07.28</div>
                <div class="c-post__title">
                  人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                </div>
                <div class="c-post__category color__tips">TIPS</div>
                <div class="c-post__tag">
                  <div class="c-tag">
                    <div class="c-tag__text">#コンサルファーム</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#共通</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#Pickup</div>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <a href="" class="c-post">
            <div class="c-post__card">
              <div class="c-post__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
              </div>
              <div class="c-post__content">
                <div class="c-post__date">2024.07.28</div>
                <div class="c-post__title">
                  人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                </div>
                <div class="c-post__category color__tips">TIPS</div>
                <div class="c-post__tag">
                  <div class="c-tag">
                    <div class="c-tag__text">#コンサルファーム</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#共通</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#Pickup</div>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <a href="" class="c-post">
            <div class="c-post__card">
              <div class="c-post__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
              </div>
              <div class="c-post__content">
                <div class="c-post__date">2024.07.28</div>
                <div class="c-post__title">
                  人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                </div>
                <div class="c-post__category color__tips">TIPS</div>
                <div class="c-post__tag">
                  <div class="c-tag">
                    <div class="c-tag__text">#コンサルファーム</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#共通</div>
                  </div>
                  <div class="c-tag">
                    <div class="c-tag__text">#Pickup</div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="p-button__container">
          <button class="c-button-d">
            <a href="" class="c-button-d__link"> もっと見る </a>
          </button>
        </div>
      </div>
    </section>

    <section class="p-pick-up">
      <div class="p-pick-up__inner">
        <div class="p-pick-up__head">
          <h2 class="c-title p-pick-up__title">
            <div class="c-title__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-white.png" alt="" />
            </div>
            <div class="c-title__text c-title__text--secondary">
              おすすめ記事
            </div>
          </h2>
          <div class="p-pick-up__scroll">
            <div
              id="prevButton"
              class="c-arrow-circle c-arrow-circle--left"
            ></div>
            <div
              id="nextButton"
              class="c-arrow-circle c-arrow-circle--right"
            ></div>
          </div>
        </div>
        <div class="p-pick-up__cards">
          <!-- Slider main container -->
          <div class="swiper p-pick-up__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev p-pick-up__swiper--prev"></div>
            <div class="swiper-button-next p-pick-up__swiper--next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar p-pick-up__scrollbar"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-category-posts">
      <div class="p-category-posts__inner">
        <div class="p-category-posts_title">
          <h2 class="c-title">
            <div class="c-title__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
            </div>
            <div class="c-title__text">すべての記事</div>
          </h2>
        </div>

        <div class="p-category-posts__wrapper">
          <div class="p-category-posts__order">
            <a class="p-category-posts__order-text is-active">新着順</a>
            <span class="p-category-posts__order-line"></span>
            <a class="p-category-posts__order-text no-active">人気順</a>
          </div>
          <div class="p-category-posts__tags box-tags">
            <a
              href=""
              class="p-category-posts__text p-category-posts__all is-active"
              >すべて</a
            >

            <a href="" class="p-category-posts__text p-category-posts__latest">
              新着情報
            </a>

            <a href="" class="p-category-posts__text p-category-posts__tips"
              >TIPS</a
            >

            <a
              href=""
              class="p-category-posts__text p-category-posts__interview"
            >
              インタビュー
            </a>

            <a class="p-category-posts__text p-category-posts__news"
              >ニュース</a
            >
          </div>

          <div class="p-category-posts__body">
            <div class="p-category-posts__body-inner">
              <div class="p-category-posts__body-cards">
                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
                    </div>
                    <div class="c-post__content">
                      <div class="c-post__date">2024.07.28</div>
                      <div class="c-post__title">
                        人材育成の新潮流：コンサルティングがもたらす効果的なトレー...
                      </div>
                      <div class="c-post__category color__tips">TIPS</div>
                      <div class="c-post__tag">
                        <div class="c-tag">
                          <div class="c-tag__text">#コンサルファーム</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#共通</div>
                        </div>
                        <div class="c-tag">
                          <div class="c-tag__text">#Pickup</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="c-post__prepare">
                <div class="c-post__prepare-inner">
                  <p class="c-post__prepare-text">投稿の準備中です。</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="p-category-post__button">
          <button class="c-button-d">
            <a href="" class="c-button-d__link">もっと見る </a>
          </button>
        </div>
      </div>
    </section>

    <div class="p-keyword">
      <div class="p-keyword__inner">
        <div class="p-keyword__head">
          <div class="p-keyword__search">
            <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="" />
          </div>
          <div class="p-keyword__text">キーワードで絞り込む</div>
        </div>
        <div class="p-keyword__body">
          <div class="c-tag">
            <a class="c-tag__text">#コンサルファーム</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#クライアント</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#共通</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#戦略</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#IT</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#業務改善</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#HR</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#M&A・事業再生</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#金融・保健</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#メーカー</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#商社</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#不動産・建設・設備</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#サービス</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#物流</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#流通</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#その他</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#広告・マスコミ</a>
          </div>
          <div class="c-tag">
            <a class="c-tag__text">#Pickup</a>
          </div>
        </div>
      </div>
    </div>

    <section class="l-cta">
      <div class="l-cta__inner">
        <div class="l-cta__container">
          <div class="c-cta-button__wrapper">
            <p class="c-cta-button__call">コンサルタントをお探しの企業様へ</p>
            <p class="c-cta-button__action">プロジェクトの相談をする</p>
          </div>
          <div class="c-cta-button__wrapper">
            <p class="c-cta-button__call c-cta-button__call--secondary">
              コンサルタントの方へ
            </p>
            <p class="c-cta-button__action c-cta-button__action--secondary">
              案件の紹介を受ける
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer class="l-footer">
      <div class="l-footer__inner">
        <div class="l-footer__body">
          <div class="l-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/footer-mark-white.png" alt="" />
          </div>
          <nav class="l-footer__lists">
            <a href="" class="l-footer__item">新着情報</a>
            <a href="" class="l-footer__item">DayMagaについて</a>
            <a href="" class="l-footer__item">TIPS</a>
            <a href="" class="l-footer__item">運営会社</a>
            <a href="" class="l-footer__item">インタビュー</a>
            <a href="" class="l-footer__item">サイト利用規約</a>
            <a href="" class="l-footer__item">ニュース</a>
          </nav>
        </div>
        <div class="l-copyright__wrapper">
          <small class="l-copyright__text">&copy;2024 Daytra Consul</small>
        </div>
        <div class="l-disclaimer__text">
          このサイトはCrown
          Cat株式会社様のご協力のもと作成したコーディング用の練習課題です。実在の人物・団体とは関係ありません。
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>

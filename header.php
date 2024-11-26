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

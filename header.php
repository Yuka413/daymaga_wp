<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="スクールの実案件チャレンジの課題サイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <title>DayMaga</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
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
      <div class="l-header__inner ">
        <div class="l-header__body ">
          <div class="l-header__content l-header-content ">
            <?php if(is_front_page()): ?>
            <h1 class="l-header-content__logo ">
              <a href="<?php echo home_url(''); ?>" class="l-header__logo-link">
                <img class="js-initial-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-all.png" alt="DayMaga" />
                <img class="js-scroll-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-scroll.png" alt="DayMaga" />
              </a>
            </h1>
            <?php else: ?>
              <div class="l-header-content__logo">
              <a href="<?php echo home_url(''); ?>" class="l-header__logo-link">
              <img class="js-initial-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-all.png" alt="DayMaga" />
                <img class="js-scroll-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-scroll.png" alt="DayMaga" />
              </a>
            </div>
            <?php endif; ?>
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
            <a href="#keyword" class="l-header-nav__search"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt=""
            /></a>
          </div>
          <nav class="l-header__lists">
            <div class="l-header__lists-heading">
            <?php $categories = get_categories(); ?>
              <?php foreach($categories as $category): ?>
                <a href="<?php echo get_category_link($category->cat_ID); ?>" class="l-header__item"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
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
            <a href="#keyword" class="l-header-list__search"
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
          <?php $categories = get_categories(); ?>
              <?php foreach($categories as $category): ?>
                <a href="<?php echo get_category_link($category->cat_ID); ?>" class="l-header__item"><?php echo $category->name; ?></a>
                <?php endforeach; ?>

            <a href="#keyword" class="l-drawer-content__search"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt=""
            /></a>
          </nav>
        </div>
      </div>
    </header>

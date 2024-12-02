<?php get_header(); ?>

    <section class="p-404">
      <div class="p-404__inner">
        <div class="p-404__body">
          <div class="p-404__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
          </div>
          <p class="p-404__en">this page not found</p>
          <h1 class="p-404__404">404</h1>
          <div class="p-404__main-text">
            申し訳ございません。お探しのページが存在しません。
          </div>
          <div class="p-404__sub-text">
            トップページに戻ってコンテンツお探しください。
          </div>
          <button class="c-button-l">
            <a href="<?php echo home_url('/'); ?>" class="c-button-l__link">
              <p class="c-button-l__text">TOPページに戻る</p>
            </a>
          </button>
        </div>
        <?php echo get_template_part('template-parts/keyword'); ?>
 <?php get_footer(); ?>

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
            <a href="<?php echo home_url('/'); ?>" class="l-footer__logo-link">
             <img src="<?php echo get_template_directory_uri(); ?>/img/footer-mark-white.png" alt="" />
            </a>
          </div>
          <nav class="l-footer__lists">
            <li class="l-footer__list-category">
              <?php $categories = get_categories(); ?>
              <?php foreach($categories as $category): ?>
                <a href="<?php echo get_category_link($category->cat_ID); ?>" class="l-footer__item"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </li>
            <li class="l-footer__list-company">
              <a href="" class="l-footer__item">DayMagaについて</a>
              <a href="" class="l-footer__item">運営会社</a>
              <a href="" class="l-footer__item">サイト利用規約</a>
            </li>
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

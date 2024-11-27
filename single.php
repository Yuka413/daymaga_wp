<?php get_header(); ?>

    <section class="p-single">
      <div class="p-single__inner">
        <time datetime="<?php the_time('c'); ?>" class="p-single__date">公開日　<?php the_time('Y.m.j'); ?></time>
        <?php $cat = get_the_category(); ?>
        <?php if($cat): ?>
        <div class="c-post__category color__<?php echo $cat[0]->term_id; ?> p-single__category--margin">
          <?php echo $cat[0]->name; ?>
        </div>
        <?php endif; ?>
        <h1 class="p-single__title">
          <?php the_title(); ?>
        </h1>
        <div class="p-single__image">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="p-single__description">
          <?php the_excerpt(); ?>
        </div>
        
        <div class="p-content">
            <?php the_content(); ?>
        </div>

        <div class="p-single__tag">
            <p class="p-single__tag-title">この記事のタグ</p>
            <div class="p-single__tag-lists">
            <?php $ID =get_the_ID(); ?>
            <?php $tags = wp_get_post_terms($ID);?>
            <?php foreach($tags as $tag) :?>
              <div class="c-tag">
                <a class="c-tag__text"><?php echo $tag->name; ?></a>
              </div>
              <?php endforeach; ?>
            </div>
      </div>
    </section>
<?php if(!is_user_logged_in()) {set_post_views(get_the_ID());} ?>
    <section class="p-pick-up p-pick-up__single">
      <div class="p-pick-up__inner">
        <div class="p-pick-up__head">
          <h2 class="c-title p-pick-up__title">
            <div class="c-title__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
            </div>
            <div class="c-title__text ">
              おすすめ記事
            </div>
          </h2>
          <div class="p-pick-up__scroll">
            <div
              id="prevButton"
              class="c-arrow-circle c-arrow-circle__left--dark"
            ></div>
            <div
              id="nextButton"
              class="c-arrow-circle c-arrow-circle__right--dark"
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
                      <img src="../img/card-2.png" alt="" />
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
                      <img src="../img/card-2.png" alt="" />
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
                      <img src="../img/card-2.png" alt="" />
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
                      <img src="../img/card-2.png" alt="" />
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
                      <img src="../img/card-2.png" alt="" />
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
    <div id="search" class="p-keyword">
      <div class="p-keyword__inner p-keyword__inner--single">
        <div class="p-keyword__head">
          <div class="p-keyword__search">
            <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="" />
          </div>
          <div class="p-keyword__text">キーワードで絞り込む</div>
        </div>
        <div class="p-keyword__body">
        <?php $tags = get_terms(array (
                    'taxonomy' => 'post_tag',
                    'hide_empty' => false,
                  )); ?>
                <?php foreach($tags as $tag): ?>
          <div class="c-tag">
            <a class="c-tag__text"><?php echo $tag->name; ?></a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
<?php get_header(); ?>

    <section class="p-gallery">
      <div class="p-gallery__inner">
        <div class="p-gallery__slide">
          <!-- Slider main container -->
          <div class="swiper p-gallery__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
               <?php $args = array(
                'post_type' => 'post',
                'orderby' => 'rand',
               );
                $gallery_query = new WP_query($args);
                ?>
               <?php if($gallery_query  ->have_posts()): ?>
                <?php while($gallery_query  ->have_posts()): ?>
                  <?php $gallery_query -> the_post(); ?>
                  <div class="swiper-slide p-gallery__slide">
                <a href="<?php the_permalink(); ?>" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="c-post__content">
                      <time datetime="<?php the_time('c'); ?>" class="c-post__date"><?php the_time("Y.m.j"); ?></datetime=>
                      <div class="c-post__title">
                        <?php echo the_title(); ?>
                      </div>
                      <?php $cat = get_the_category(); ?>
                      <?php if ($cat[0]): ?>
                      <div class="c-post__category color__<?php echo $cat[0]->term_id; ?>"><?php echo $cat[0]->name; ?></div>
                      <?php endif; ?>
                      <div class="c-post__tag">
                        <?php $tags = get_the_tags(); ?>
                        <?php foreach ($tags as $tag) :?>
                        <div class="c-tag">
                          <div class="c-tag__text"><?php echo $tag->name; ?></div>
                        </div>
                        <?php endforeach; ?>

                      </div>
                    </div>
                  </div>
                </a>
              </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
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
          <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $my_query = new WP_query($args);
          ?>
          <?php if ($my_query -> have_posts()): ?>
          <?php while ($my_query -> have_posts()): ?>
            <?php $my_query ->the_post(); ?>
            <a href="" class="c-post">
            <div class="c-post__card">
              <div class="c-post__image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="c-post__content">
                <time datetime="<?php the_time('c'); ?>" class="c-post__date"><?php the_time('Y.m.j'); ?></time>
                <div class="c-post__title">
                  <?php the_title(); ?>
                </div>
                <?php $cat = get_the_category(); ?>
                <?php if($cat[0]): ?>
                <div class="c-post__category color__<?php echo $cat[0]->term_id; ?>"><?php echo $cat[0]->name; ?></div>
                <?php endif; ?>
                <div class="c-post__tag">
                  <?php $tags = get_the_tags(); ?>
                  <?php foreach($tags as $tag): ?>
                  <div class="c-tag">
                    <div class="c-tag__text"><?php echo $tag->name; ?></div>
                  </div>
                  <?php endforeach; ?>
 
                </div>
              </div>
            </div>
          </a>
            <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
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
              class="c-arrow-circle c-arrow-circle__left"
            ></div>
            <div
              id="nextButton"
              class="c-arrow-circle c-arrow-circle__right"
            ></div>
          </div>
        </div>
        <div class="p-pick-up__cards">
          <!-- Slider main container -->
          <div class="swiper p-pick-up__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
               <?php $args = array(
                'post_type' =>'post',
                'posts_per_page' =>5,
                'meta_key' => 'post_views_count',
                'order_by' => 'meta_value_num',
                'order' => 'DESC',
               );
               $pick_up_query = new WP_query($args);
               ?>
               <?php if($pick_up_query -> have_posts()): ?>
                <?php while($pick_up_query -> have_posts()): ?>
                  <?php $pick_up_query -> the_post(); ?>
              <div class="swiper-slide p-pick-up__slider">
                <a href="" class="c-post">
                  <div class="c-post__card p-pick-up__card">
                    <div class="c-post__image">
                      <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="c-post__content">
                      <time datetime="<?php the_time('c'); ?>"  class="c-post__date"><?php the_time('Y.m.j'); ?></time>
                      <div class="c-post__title">
                        <?php echo the_title(); ?>
                      </div>
                      <?php $cat =get_the_category(); ?>
                      <?php if($cat[0]): ?>
                      <div class="c-post__category color__<?php echo $cat[0]->term_id; ?>"><?php echo $cat[0]->name; ?></div>
                      <?php endif; ?>
                      <div class="c-post__tag">
                        <?php $tags=get_the_tags(); ?>
                        <?php foreach($tags as $tag): ?>
                        <div class="c-tag">
                          <div class="c-tag__text"><?php echo $tag->name; ?></div>
                        </div>
                          <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
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
          <div class="p-category-posts__tags box-tags">
            <a
              href=""
              class="p-category-posts__text p-category-posts__all is-active"
              >すべて</a
            >

            <?php $categories = get_categories();?>
            <?php foreach ($categories as $category ): ?>
            <a href="" class="p-category-posts__text p-category-posts__color--<?php echo $category->term_id; ?>">
              <?php echo $category->name; ?>
            </a>
            <?php endforeach; ?>
            <!-- <a href="" class="p-category-posts__text p-category-posts__tips"
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
            > -->
          </div>
          <div class="p-category-posts__wrapper--secondary">
          <div class="p-category-posts__order">
            <a class="p-category-posts__order-text is-active">新着順</a>
            <span class="p-category-posts__order-line"></span>
            <a class="p-category-posts__order-text no-active">人気順</a>
          </div>

          <div class="p-category-posts__body">
            <div class="p-category-posts__body-inner">
              <div class="p-category-posts__body-cards">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <a href="" class="c-post">
                  <div class="c-post__card">
                    <div class="c-post__image">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="c-post__content">
                      <time datetime="<?php the_time('c'); ?>"  class="c-post__date"><?php the_time('Y.m.j') ?></time>
                      <div class="c-post__title">
                        <?php the_title(); ?>
                      </div>
                      <?php $cat = get_the_category(); ?>
                      <?php if($cat[0]): ?>
                      <div class="c-post__category color__<?php echo $cat[0]->term_id; ?>"><?php echo $cat[0]->name; ?></div>
                      <?php endif; ?>
                      <div class="c-post__tag">
                        <?php $tags = get_the_tags(); ?>
                        <?php foreach($tags as $tag): ?>
                        <div class="c-tag">
                          <div class="c-tag__text"><?php echo $tag->name; ?></div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </a>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
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


    <div id="search" class="p-keyword">
      <div class="p-keyword__inner">
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
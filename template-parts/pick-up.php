<section class="p-pick-up <?php echo is_single()? 'p-pick-up__single': ''; ?>">
  <div class="p-pick-up__inner">
    <div class="p-pick-up__head">
      <div class="c-title p-pick-up__title">
        <div class="c-title__image">
        <?php if (is_single()): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-white.png" alt="" />
        <?php endif; ?>
        </div>
        <div class="c-title__text <?php echo is_front_page()? 'c-title__text--secondary' : '';?>">
          おすすめ記事
        </div>
      </div>
      <div class="p-pick-up__scroll">
        <?php if(is_single()): ?>
            <div
              id="prevButton"
              class="c-arrow-circle c-arrow-circle__left--dark"
            ></div>
            <div
              id="nextButton"
              class="c-arrow-circle c-arrow-circle__right--dark"
            ></div>
            <?php else :?>
        <div
          id="prevButton"
          class="c-arrow-circle c-arrow-circle__left"
        ></div>
        <div
          id="nextButton"
          class="c-arrow-circle c-arrow-circle__right"
        ></div>
        <?php endif; ?>
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

<?php get_header(); ?>

<div class="p-gallery">
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
</div>

<section id="current" class="p-current">
  <div class="p-current__inner">
    <div class="c-title p-current__title">
      <div class="c-title__image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
      </div>
      <h2 class="c-title__text">新着情報</h2>
    </div>
    <div class="p-current__cards">
      <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'current',
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
      <div class="c-button-d">
        <a href="<?php echo get_category_link($cat[0]); ?>" class="c-button-d__link"> もっと見る </a>
      </div>
    </div>
  </div>
</section>

<!-- おすすめ記事 -->
<?php get_template_part('template-parts/pick-up'); ?>

<section class="p-category-posts">
  <div class="p-category-posts__inner">
    <div class="p-category-posts_title">
      <div class="c-title">
        <div class="c-title__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
        </div>
        <h2 class="c-title__text">すべての記事</h2>
      </div>
    </div>
    <div class="p-category-posts__wrapper">
      <div class="p-category-posts__tags box-tags">
        <?php $categories = get_the_category(); ?>
        <a
         href=""
          data-slug="all"
          class="p-category-posts__text p-category-posts__all is-active"
          >すべて</a
        >

        <?php $categories = get_categories();?>
        <?php foreach ($categories as $category ): ?>
        <a href="" data-slug="<?php echo $category->slug; ?>" class="p-category-posts__text p-category-posts__color--<?php echo $category->term_id; ?>">
          <?php echo $category->name; ?>
        </a>
        <?php endforeach; ?>
      </div>
      <div class="p-category-posts__wrapper--secondary">
      <div class="p-category-posts__order">
        <a class="p-category-posts__order-text is-active">新着順</a>
        <span class="p-category-posts__order-line"></span>
        <a class="p-category-posts__order-text">人気順</a>
      </div>


<div class="p-category-posts__body">
  <div class="p-category-posts__body-inner">
    <div class="p-category-posts__body-cards">
      <?php $args = array (
    'post_type' => 'post',
    'posts_per_page' => 9,
    );
    $all_query = new WP_query($args); ?>
    <?php if($all_query->have_posts()): ?>
      <?php while($all_query->have_posts()): ?>
        <?php $all_query->the_post(); ?>
        <?php $category = get_the_category(); ?>
        <a  href="<?php the_permalink(); ?>" class="c-post js-category-post" id="<?php echo $category[0] -> slug; ?>">
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
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

            </div>
            <?php 
                $tag = get_queried_object();
                $args = array (
                'post_type' => 'post',
                );
                $all_query = new WP_query($args); ?>
                <?php if(!$all_query->have_posts()): ?>
            <div class="c-post__prepare">
                <div class="c-post__prepare-inner">
                    <p class="c-post__prepare-text">投稿の準備中です。</p>
                </div>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
                </div>
    <div class="p-category-post__button">
        <div class="c-button-d">
          <a href="<?php echo get_post_type_archive_link('/'); ?>all" class="c-button-d__link">もっと見る </a>
        </div>
      </div>
    </div>
  </section>


<?php get_template_part('template-parts/keyword') ;?>

<?php get_footer(); ?>
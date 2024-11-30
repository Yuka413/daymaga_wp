<?php get_header(); ?>

<section class="p-category-posts">
  <div class="p-category-posts__inner">
    <div class="p-category-posts_title">
      <h2 class="c-title">
        <div class="c-title__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/symbol-color.png" alt="" />
        </div>
        <div class="c-title__text"><?php the_archive_title(); ?>の記事</div>
      </h2>
    </div>
    <div class="p-category-posts__wrapper">
      <div class="p-category-posts__tags box-tags">
        <?php $category = get_queried_object();?>
        <a href="" data-slug="<?php echo $category->slug; ?>" class="p-category-posts__text p-category-posts__color--<?php echo $category->term_id; ?> is-active">
          <?php echo $category->name; ?>
        </a>
      </div>
      <div class="p-category-posts__wrapper--secondary">
      <div class="p-category-posts__order">
        <a class="p-category-posts__order-text is-active">新着順</a>
        <span class="p-category-posts__order-line"></span>
        <a class="p-category-posts__order-text no-active">人気順</a>
      </div>


<div class="p-category-posts__body">
  <div class="p-category-posts__body-inner body-color__<?php echo $category->term_id; ?>">
    <div class="p-category-posts__body-cards">
      <?php 
      $category_id = get_queried_object_id();
      $args = array (
    'post_type' => 'post',
    'cat' =>$category_id,
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


<?php get_template_part('template-parts/keyword'); ?>

<?php get_footer(); ?>
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
        <a href="" data-slug="<?php echo $category->slug; ?>" class="p-category-posts__text p-category-posts__all is-active">
          すべて
        </a>
      </div>
      <div class="p-category-posts__wrapper--secondary">
      <div class="p-category-posts__order">
        <a href="" class="p-category-posts__order-text is-active">新着順</a>
        <span class="p-category-posts__order-line"></span>
        <a href="" class="p-category-posts__order-text">人気順</a>
      </div>


     <div class="p-category-posts__body">
        <div class="p-category-posts__body-inner">
            <div class="p-category-posts__body-cards">
                <?php 
                $tag = get_queried_object();
                $args = array (
                'post_type' => 'post',
                'tag' => $tag->slug,
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
                'tag' => $tag->slug,
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

  </div>
</section>


<?php get_template_part('template-parts/keyword'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

    <section class="p-single">
      <div class="p-single__inner">
        <time datetime="<?php the_time('c'); ?>" class="p-single__date">公開日　<?php the_time('Y.m.j'); ?></time>
        <?php $cat = get_the_category(); ?>
        <?php if($cat): ?>
        <a href="<?php echo get_category_link($cat[0]->cat_ID); ?>" class="c-post__category color__<?php echo $cat[0]->term_id; ?> p-single__category--margin">
          <?php echo $cat[0]->name; ?>
        </a>
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
                <a  href="" class="c-tag__text"><?php echo $tag->name; ?></a>
              </div>
              <?php endforeach; ?>
            </div>
      </div>
    </section>
<?php {set_post_views(get_the_ID());} ?>

<?php get_template_part('template-parts/pick-up'); ?>


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
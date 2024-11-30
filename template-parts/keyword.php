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
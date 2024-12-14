<?php
function my_script_init() {
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/style.css.", array(), filemtime(get_theme_file_path('/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri(). "/js/script.js", array("jquery"), filemtime(get_theme_file_path('/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    
    }
    add_action("after_setup_theme", "my_setup");

    // ボタンショートコード
 function button_shortcode($attrs, $content ='') {
    return '<button class="c-button-l p-content__button"><a href="' . $attrs['link'] . '" class="c-button-l__link"> '. $content.'</a></button>';
 }
 add_shortcode('btn', 'button_shortcode');


//  引用文ショートコード
 function quotation_shortcode($attrs, $content ='') {
    return '<div class="p-quotation">
            <q class="p-quotation__text">' .$attrs['text']. '</q>
            <a href="'.$attrs['link_url'].'" class="p-quotation__link" target="_blank">'.$attrs['link_text'].'</a></div>';
 }
 add_shortcode('quotation', 'quotation_shortcode');


 function post_view_count() {
  global $post;
  $post_id = $post->ID;
  $meta_key = 'post_views_count';
  $views = get_post_meta($post_id, $meta_key, true);

  if ($views === '') {
    delete_post_meta($post_id, $meta_key);
    add_post_meta($post_id, $meta_key, '0');
  } else {
    $views++;
    update_post_meta($post_id, $meta_key, $views);
  }
}

// 投稿管理画面に「閲覧数」カラムを追加
function add_views_column($columns) {
  $columns['post_views'] = '閲覧数';
  return $columns;
}
add_filter('manage_posts_columns', 'add_views_column');

// カスタムカラムにデータを表示
function show_views_column($column_name, $post_id) {
  if ($column_name === 'post_views') {
      $views = get_post_meta($post_id, 'post_views_count', true);
      echo $views ? $views : '0'; // 閲覧数がなければ 0 を表示
  }
}
add_action('manage_posts_custom_column', 'show_views_column', 10, 2);

// 閲覧数カラムをソート可能に
function make_views_column_sortable($columns) {
  $columns['post_views'] = 'post_views_count';
  return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'make_views_column_sortable');

// ソートロジックを追加
function sort_views_column($query) {
  if (!is_admin()) {
      return;
  }

  $orderby = $query->get('orderby');

  if ($orderby === 'post_views_count') {
      $query->set('meta_key', 'post_views_count');
      $query->set('orderby', 'meta_value_num');
  }
}
add_action('pre_get_posts', 'sort_views_column');


/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

// デフォルトの投稿の一覧ページリンク取得でget_post_type_archive_linkが使えるようにする
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'all'; 
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// Ajax用投稿取得処理
function get_posts_by_category() {
  // スラッグを取得
  $slug = isset($_GET['slug']) ? sanitize_text_field($_GET['slug']) : 'all';

  // デフォルトクエリ設定
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 9, // 表示する投稿数
  );

  // カテゴリー条件を追加
  if ($slug !== 'all') {
      $category = get_category_by_slug($slug);
      if ($category) {
          $args['cat'] = $category->term_id;
      }
  }

  // 投稿を取得
  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
          ?>
          <article>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
          </article>
          <?php
      endwhile;
  else :
      echo '<p>投稿がありません。</p>';
  endif;

  wp_reset_postdata();
  wp_die(); // Ajaxの終了
}
add_action('wp_ajax_get_posts_by_category', 'get_posts_by_category');
add_action('wp_ajax_nopriv_get_posts_by_category', 'get_posts_by_category');
?>



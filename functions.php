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


//  おすすめ記事を表示するために、投稿の閲覧数を取得
 function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }
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

?>


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

 function button_shortcode($attrs, $content ='') {
    return '<button class="c-button-l p-content__button"><a href="' . $attrs['link'] . '" class="c-button-l__link"> '. $content.'</a></button>';
 }
 add_shortcode('btn', 'button_shortcode');

 function quotation_shortcode($attrs, $content ='') {
    return '<div class="p-quotation">
            <q class="p-quotation__text">' .$attrs['text']. '</q>
            <a href="'.$attrs['link_url'].'" class="p-quotation__link">'.$attrs['link_text'].'</a></div>';
 }
 add_shortcode('quotation', 'quotation_shortcode');

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
?>


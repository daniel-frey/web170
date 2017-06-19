<?php
/* 
Theme Name: Web 170 Flying Lion Brewing Wordpress
Theme URI: https://github.com/fncreative/web170
Author: Dann Frey
Author URI: https://fncreative.design
Description: This is the theme that will be used for Flying Lion Brewing Webv 170 Project.
Version: One Point Two
*/
// register menu locations
register_nav_menus(array('main-menu' => __('Main Menu'), 'footer-menu' => __('Footer Menu')));
//
// Add theme support for post thumbnails & featured images
add_theme_support('post-thumbnails');
//
// register the sidebar widget
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));
// this is for excerpts
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );
?>
<?php function flb_list_child_pages(){
    global $post;
    if(is_page() && $post->post_parent){
        $childpages = wp_list_pages('sort_colum=menu_order&title_li=&child_of='.$post->post_parent.'&echo=0');
    } 
    else {
        $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->ID.'&echo=0');
    }
    if ($childpages){
        $string = '<ul class="page-sub-nav">'.$childpages.'</ul>';
    }
    echo $string;
}
?>
<?php function get_my_title_tag(){
    global $post;
    if (is_front_page()){
        bloginfo ('description');
    } 
    elseif (is_page()) {
        the_title();
        if ($post->post_parent) {
            echo ' | ';
            echo get_the_title($post->post_parent);
        }
    } 
    elseif (is_category()) {
        echo get_the_category()[0]->cat_name;
    }
    elseif (is_single()) {
        the_title();
        echo ' | ';
        echo get_the_category()[0]->cat_name;
    }
    else {
        bloginfo('description');
    }
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Colbumia City, Seattle, Wa.';
}
?>
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package am750
 */

//AMP - SANTI
function viene_de_google(){
    if(isset($_GET["forceAMP"]) ){
        return true;
    }
    if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'],"google") != false){
        if( isMobile() ){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function get_custom_cat_template($single_template) {
    global $post;
    if ( !is_singular('programas') && viene_de_google() &&  (!in_category('fullwidth') )) {
        // remove_for_amp();
        $single_template = get_template_directory() . '/amp/single-amp.php';
    }
    return $single_template;
} 
add_filter( "single_template", "get_custom_cat_template" );

// function get_custom_category_template($category_template) {
//     global $post;
//         remove_for_amp();
//         $single_template = dirname( __FILE__ ) . '/../amp/category.php';
//     return $single_template;
// } 
// add_filter( "category_template", "get_custom_category_template" ) ;

remove_action('wp_head', 'wlwmanifest_link');

remove_for_amp();
function remove_for_amp(){
    remove_action('wp_head', 'wlwmanifest_link');
    show_admin_bar(false);
}
//AMP - SANTI
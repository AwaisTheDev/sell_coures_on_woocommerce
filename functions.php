<?php

function equeue_child_css(){
    wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri()."/assets/css/style.css" , array(), filemtime(get_stylesheet_directory()."/assets/css/style.css"), false);
    wp_enqueue_script( 'child-theme-js', get_stylesheet_directory_uri()."/assets/js/main.js" , array(), filemtime(get_stylesheet_directory()."/assets/js/main.js"), true);

}

add_action( 'wp_enqueue_scripts', 'equeue_child_css' );


add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
   remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
 
}
<?php
function my_theme_enqueue_styles() {
//     $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
//     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array( $parent_style ),
//         wp_get_theme()->get('Version')
//     );
    wp_enqueue_style('childAssets',get_stylesheet_directory_uri().'/assets/css/style.css',array('ct_theme'));
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'after_setup_theme', 'your_parent_theme_setup', 9 );
function your_parent_theme_setup() {    
	include_once 'fixes/menu/zpProductsShortcode.class.php';
	include_once 'fixes/menu/zpProductShortcode.class.php';
}

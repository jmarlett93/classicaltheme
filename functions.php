<?php

/*
this is the functions.php for the childtheme Classical theme
*/

function theme_enqueue_styles() {

    $parent_style = 'twentysixteen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'Classical_Theme-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_action( 'wp_footer', 'pc_custom_footer' );
 
function pc_custom_footer() {
	echo "<div style='text-align:center;'><p>This is my custom footer message!</p></div>";
}

/*
 
 function custom_dropdown_menu() {
 	echo "<div style='text-align:cenbter; '><p> This is a custom header message</p> </div>";
 }

add_action('wp_head', 'custom_dropdown_menu' );
 
 */
 
 ?> 
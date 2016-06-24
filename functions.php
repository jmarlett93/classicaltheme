<?php

/*
Functions.php for the childtheme Classical theme
*/

function theme_enqueue_styles() {

    $parent_style = 'twentysixteen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'Classical_Theme-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}/* Enqueues classical theme as childtheme of twentysixteen*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function clt_header() {
    do_action('clt_header'); 
} /* this action hook provides access to the header*/
  

 ?> 
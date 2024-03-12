<?php
if ( !function_exists( 'wpb_setup' ) ):
	function wpb_setup () {
	//https://developer.wordpress.org/reference/functions/add_theme_support/
	add_theme_support( 'post-thumbnails' );
	//add_image_size( name, width, height, crop );
	add_theme_support('html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	));
}
endif;
add_action( 'after_setup_theme', 'wpb_setup' );

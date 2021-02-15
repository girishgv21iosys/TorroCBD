<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );


/**
 * Enqueue a script with jQuery as a dependency.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );


// Add widgets
function widgetsInit() {
	register_sidebar(array(
		'name' => 'Products',
		'id' => 'products'
	));
}
add_action('widgets_init', 'widgetsInit');


if (class_exists('woocommerce')) {
	include_once 'includes/wp-custom.php';
}




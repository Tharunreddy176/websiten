<?php
if ( ! function_exists( 'hello_insurance_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hello_insurance_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hello Insurance, use a find and replace
		 * to change 'hello-insurnace' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hello-insurance', get_stylesheet_directory(  ) . '/languages' );
    }
endif;
add_action( 'after_setup_theme', 'hello_insurance_setup' );


function hello_insurance_scripts() {
    // enqueue style
	wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
	
}
add_action('wp_enqueue_scripts', 'hello_insurance_scripts');
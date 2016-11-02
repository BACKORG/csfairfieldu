<?php
// Since WordPress 3.6, If your theme supports HTML5, which happens if it uses:
add_theme_support( 'html5', array( 'search-form' ) );

// declare their support for post thumbnails 
add_theme_support( 'post-thumbnails' ); 

// replace core jquery to user jquery
wp_deregister_script('jquery');
wp_register_script('jquery', (get_template_directory_uri() . '/js/jquery-2.1.4.min.js'));
wp_enqueue_script('jquery');

/**
 * Add css and js to the Wordpress theme
 */
function theme_assets() {
	// load css
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/fontawesome.css' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', false, time() );

	// load javascript
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );


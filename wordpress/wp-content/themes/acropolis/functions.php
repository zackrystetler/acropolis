<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu' ),
			'page-menu' => __( 'Page Menu' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );


//add theme style sheets
function wpt_theme_styles() {

    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Caesar+Dressing|Open+Sans:300,700' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action ( 'wp_enqueue_scripts', 'wpt_theme_styles' );

//link to theme javascript
function wpt_theme_js() {

	wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/app.js', array('jquery'), null, true);


}

add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );







?>

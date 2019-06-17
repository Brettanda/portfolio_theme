<?php
/*
*
*Table of contents:
*	1.	Theme Support
*	2.	loading Assets
*	3.	Theme Customizer
*	4.	Navigation Menus
*	5.	Widgets
*	6.	Functions maps
*
*/

//https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
add_theme_support('title-tag');
add_theme_support( 'html5', array( /*'comment-list', 'comment-form', 'search-form', */'gallery', 'caption' ) );
add_theme_support( 'custom-header', array(
	'header-text' => false
));
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); 

// set_post_thumbnail_size( 150, 150 );
// add_image_size( "Thumb", 1920, 1080, true );
/*
*
*Load Assets
*
*/

function linked_assets(){
	wp_enqueue_style( 'theme_info',   	get_stylesheet_uri());
	// For free fonts go to https://fonts.google.com/
	// wp_enqueue_style( 'google-fonts',	'https://fonts.googleapis.com/css?family=Comfortaa:300|Montserrat&display=swap');
	// wp_enqueue_style( 'normalize', 		get_stylesheet_directory_uri() . '/node_modules/normalize.css/normalize.css');
	wp_enqueue_style( 'theme_styles',	get_stylesheet_directory_uri() . '/assets/dist/style.min.css');

	// wp_enqueue_script('delighers', 		get_stylesheet_directory_uri() . '/assets/src/modules/delighters.min.js');
	// wp_enqueue_script('animejs', 		get_stylesheet_directory_uri() . '/node_modules/animejs/lib/anime.min.js');
	// wp_enqueue_script('rellax', 		get_stylesheet_directory_uri() . '/node_modules/rellax/rellax.min.js');
	
	// Jquery and the theme script can be found in the footer.php
	// wp_enqueue_script('jquery', 		get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
	// wp_enqueue_script('theme_script', 	get_stylesheet_directory_uri() . '/assets/compiled/script.js');
}
add_action('wp_enqueue_scripts','linked_assets');

/*
*
*	Dynamic Navigation Menus
*
*/

function my_menus(){
	register_nav_menu('header-menu','Main Navigation Menu');
	register_nav_menu('social-menu','Social Menu');
}
add_action('init','my_menus');

/*
*
*	Widgets
*
*/ 

// function widgets(){
// 	register_sidebar(array(
// 		'name' => 'Sidebar for the Homepage',
// 		'description' => 'The sidebar for the homepage',
// 		'id' => 'home'
// 	));
// }
// add_action('widgets_init','widgets');



/**
 * Load the theme functions.
 *
 * Inspired by Sage.
 */
array_map(function ($file) use ($theme_error) {
	$file = "/assets/src/functions/$file.php";
	if (!locate_template($file, true, true)) {
			$theme_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'brettanda'), $file), 'File not found');
	}
}, [/*'taxonomies',*/'postType', 'block', 'customizer']);

<?php 

/**
 *
 * @package WordPress
 * @subpackage YouandCo Theme
 * @since YouandCo Theme
 */
	
// Include Custom Posts and Taxonomies
include 'custom_posts/services.php';

flush_rewrite_rules();


// Add menu functionality to this theme
add_theme_support( 'menus' );

// Set each menu id
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-nav' 	=> 'Main Navigation'
		)
	);
}

// Image Sizes

add_image_size( 'square_img', 300, 300, true );
add_image_size( 'thumb_carousel', 150, 150, true );

if ( function_exists('register_sidebar') )
	register_sidebar();
?>
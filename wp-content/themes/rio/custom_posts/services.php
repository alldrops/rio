<?php
add_action('init', 'services_post_type');

if(!(function_exists('services_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function services_post_type() {
	 
		$labels = array(
			'name' => _x('Services', 'post type services'),
			'singular_name' => _x('Service', 'post type singular services'),
			'add_new' => _x('Add new service', 'services'),
			'add_new_item' => __('Add new services'),
			'edit_item' => __('Edit service'),
			'new_item' => __('New service'),
			'view_item' => __('View service'),
			'search_items' => __('Search services'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Services'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'menu_icon' => 'dashicons-menu',
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'services'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'services' , $args );
		flush_rewrite_rules();
	}
}
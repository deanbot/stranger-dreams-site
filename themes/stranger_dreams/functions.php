<?php
	
	define('TEMPLATE_PATH','/wp-content/themes/stranger_dreams');
	
	function sd_theme_setup() {
		//register custom post types
		add_action('init', 'sd_new_post_types');
		add_action('wp_enqueue_scripts', 'sd_scripts');
		remove_filter('excerpt_more', 'custom_excerpt_more');
		remove_filter('excerpt_more', 'no_more_jumping');
		add_filter('excerpt_more', 'sd_excerpt_more');
	}
	add_action( 'after_setup_theme', 'sd_theme_setup' );
	
	function sd_excerpt_more($more) {
		global $post;
		return '<br/><a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	
	function sd_new_post_types() {
		$labels = array(
			'name' => _x('Destinations', 'post type general name'),
			'singular_name' => _x('Destination', 'post type singular name'),
			'add_new' => _x('Add New Destination', 'destination'),
			'add_new_item' => __('Add New Destination'),
			'edit_item' => __('Edit Destination'),
			'new_item' => __('New Destination'),
			'view_item' => __('View Destination'),
			'search_items' => __('Search Destinations'),
			'not_found' =>  __('No destinations found'),
			'not_found_in_trash' => __('No destinations found in Trash'), 
			'parent_item_colon' => ''
		);
		register_post_type( 
			'destination',
			array (
				'labels' => $labels,
				'exclude_from_search' => true, 
				'publicly_queryable' => true,
				'show_ui' => true,
				'hierarchical' => false,
				'has_archive' => false,
				'exclude_from_search' => true,
				'supports' => array('title','editor','page-attributes', 'post-formats'),
				'menu_position' => 10
			) 	
		);
	}
	
	function sd_scripts() {
		if (!is_admin()) {
			wp_enqueue_script('frontpage', '/wp-content/themes/stranger_dreams/js/frontpage.js', array('swfobject'));
		}
	}
?>
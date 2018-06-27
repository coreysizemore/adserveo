<?php
	
	/*
		Child Wordpress Funtions
	*/
	
	function csdd_child_scripts() {
	
		wp_enqueue_style( 'csdd-custom', get_stylesheet_directory_uri() . '/css/custom.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'csdd_child_scripts' );
	
	/*
		Generated ACF Pages
	*/


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Sponsors',
			'menu_title' => 'Sponsors',
			'menu_slug' => 'sponsors',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
	
	}

?>
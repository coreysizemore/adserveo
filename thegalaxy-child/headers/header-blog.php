<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	// blog header starts here
	
	if( get_field('display_search', 'options')):

		get_search_form();

	endif;
	
	if( get_field('utilize_login_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/loggedin' );
	
	endif;
	
	if( get_field('utilize_top_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/topbar' );
	
	endif;

	echo '<header id="header_page">';
	
	if( get_field('imageslideshow_overlay', 'options') ):
	
		echo '<div class="image_overlay"></div>';
	
	endif;
	
	if( get_field('utilize_nav_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/primarynav' );
	
	endif;
		
	echo '<div id="page_title"><h1 class="heading">News & Stories</h1>';

	echo '<h2 class="subheading">Below is our latest news entries.</h2>';

	echo '</header>';
	
	
	
	// mobile page header starts here
	
	echo '<header id="header_page_mobile">';
	
	get_template_part( 'misc/mobilenav' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	echo '<div id="page_title"><h1 class="heading">News & Stories</h1>';

	echo '<h2 class="subheading">Below is our latest news entries.</h2>';

	echo '</header>';
	
?>
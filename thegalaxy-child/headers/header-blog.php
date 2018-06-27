<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
	endif;

	echo '<header class="header_page header_page_home page_default_image ';
	
	basename(get_permalink());
	
	echo '" data-stellar-background-ratio="0.9">';
	
	get_template_part( 'sidebars/sidebar' , 'contact-information' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;

	if( get_field('navigation_location', 'options') == 'top' ):
	
		echo '<div id="nav_bar" class="top_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'bottom' ):
	
		echo '<div id="nav_bar" class="bottom_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'left' ):
	
		echo '<div id="nav_bar" class="left_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'right' ):
	
		echo '<div id="nav_bar" class="right_navigation">';
	
	endif;
	
	echo '<div class="container"><div class="row gutters"><div class="col_2">';
		
	get_template_part( 'logos/logo', 'main' );
			
	echo '</div>';
		
	if( get_field('header_social_location', 'options') == 'both' ):
	
		echo '<div class="col_8">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div><div class="col_2">';
		
		echo get_template_part( 'navs/nav', 'social' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'topbar' ):
	
		echo '<div class="col_10">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'mainbar' ):
	
		echo '<div class="col_8">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div><div class="col_2">';
		
		echo get_template_part( 'navs/nav', 'social' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'none' ):
	
		echo '<div class="col_10">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div>';
	
	endif;
	
	echo '</div></div></div>';
				
	echo '<div id="page_title" data-stellar-ratio="0.75"><h1 class="heading">News & Stories</h1><h2 class="subheading">Below is our latest news entries.</h2></div>';	
	
	echo '</header>';

	echo '<header class="header_page header_page_mobile page_default_image blog ';
	
	basename(get_permalink());
	
	echo '">';
	
	get_template_part( 'navs/nav', 'mobile' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	echo '<div id="page_title"><h1 class="heading">News & Stories</h1><h2 class="subheading">Below is our latest news entries.</h2></div>';
	
	echo '</header>';
	
?>
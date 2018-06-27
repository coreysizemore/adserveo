<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php
	
	if( get_field('secondary_navigation') ):
	
		if ( has_nav_menu( 'secondary_nav' ) ):
		
	    	echo get_template_part( 'navs/nav', 'secondary' );
	    	    	
	    endif;
    
    endif;
    
?>

<?php 
	
	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;
		
?>

<div class="main <?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
						
				</div>
				
			</div>
			
		</div>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

	
<?php get_template_part( 'misc/parallax' ); ?>

<?php
		
	if( have_rows('sponsors','option') ):
			
		echo '<div class="sponsor_wrapper"><div class="container"><div class="row gutters"><div class="col_12">';
				
			if( get_field('sponsors_section_heading') ) :
				
				echo '<div class="content"><h2>';
					
				the_field('sponsors_section_heading');
						
				echo '</h2></div></div></div><div class="row gutters"><div class="col_12">';
						
			endif;
						
		while ( have_rows('sponsors','option') ) : the_row();
						        
			echo '<div class="sponsor_logo">';
					
			if( get_sub_field('link') ):
					
				echo '<a href="';
							        
				the_sub_field('link');
							
				echo '" target="_blank">';
							
				echo '<img src="';
							
				the_sub_field('image');
							        
				echo '" /></a>';
						
			else :
					
				echo '<img src="';
							
				the_sub_field('image');
							        
				echo '" /></a>';
					
			endif;
					
			echo '</div>';
						
		endwhile;
					
		echo '</div></div></div></div>';
							
	else :
				
	endif;
			
?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	
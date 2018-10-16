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
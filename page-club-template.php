<?php

/*
Template Name: Club page template
Description: lvh
Author: lvh
Version: 1.0
*/

get_header(); 

?>

			<div class="pattern-club"></div>

			<?php include('breadcrumbs.php');  ?>
			
<div class="club-wrap">

	
			<div id="club-page-logo-container">
			
				<a href="club"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-club.png" /></a>
					
				<div id="club-logo-title">COCKTAIL BAR AND CLUB</div>
				
			</div>

			
			<div id="primary" class="content-area">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					<h1 style="color:#fff;margin:0 0 40px"><?php  the_title(); ?></h1>  
					
							<div class="entry">
								<?php the_content(); ?>
							</div><!-- entry -->
					<?php endwhile; ?>
					<?php endif; ?>


			</div><!-- #primary -->
</div><!-- .wrap -->


			<div class="pattern-club"></div>


<?php get_footer();
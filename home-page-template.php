<?php

/*
Template Name: Home-page-template
Description: lvh
Author: lvh
Version: 1.0
*/


get_header(); ?>


<div class="wrap">


	<div id="primary" class="content-area">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="entry">
						<?php the_content(); ?>
					</div><!-- entry -->
			<?php endwhile; ?>
			<?php endif; ?>

			
			
			
	</div><!-- #primary -->
	
</div><!-- .wrap -->

<?php get_footer();

<?php

/*
Template Name: Cafe page template
Description: lvh
Author: lvh
Version: 1.0
*/

get_header(); ?>

<div class="pattern-cafe"></div>

<div class="cafe-wrap">

			<?php include('breadcrumbs.php');  ?>
	
			<div id="cafe-logo-container">
			
				<a href="cafe"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" /></a>
					
				<span id="cafe-logo-title">ORIENTAL CAFE</span>
				
			</div>

	
	<div id="primary" class="content-area">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<h1 style="color:#000;margin:0 0 40px"><?php  the_title(); ?></h1>  
			
			<div class="pattern-cafe"></div>

					<div class="entry">
						<?php the_content(); ?>
					</div><!-- entry -->
			<?php endwhile; ?>
			<?php endif; ?>

			
<div class="pattern-cafe"></div>
	</div><!-- #primary -->
</div><!-- .wrap -->




<?php get_footer();

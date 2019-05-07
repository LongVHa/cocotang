<?php

get_header(); ?>


<div class="wrap" style="margin:60px 0;background:#fff">

	
	<?php
	is_front_page() ? :	include('breadcrumbs.php'); 
	
	?>
	
	
	<div id="primary" class="content-area">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1 style="color:#000">
			<?php  the_title(); ?></h1>  
			<br/>
					<div class="entry">
						<?php the_content(); ?>
					</div><!-- entry -->
			<?php endwhile; ?>
			<?php endif; ?>

			
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

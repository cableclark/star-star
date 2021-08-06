<?php
get_header();
?><div class="thumb-container"><?php the_post_thumbnail('medium_large');?></div>	
	<main id="primary" class="site-main white-bg ">
		<div class="site-container">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
				?>
			<?php	
			endwhile; // End of the loop.
			?>
		</div>	
	</main><!-- #main -->
<?php
get_sidebar();
get_sidebar( 'similar' );
get_footer();

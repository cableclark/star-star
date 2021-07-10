<?php
/**
 * Template Name: Contact
 * 
 * */
get_header( 'custom' );
?>
	<main id="primary" class="site-main site-container margin-top background-unset">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; 
		?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();

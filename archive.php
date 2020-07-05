<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/excerpt', get_post_type() );
			endwhile;
			the_posts_pagination( array(
				'mid_size'  => 3,
				'prev_text' => __( 'Назад', 'Miss-Albini' ),
				'next_text' => __( 'Напред', 'Miss-Albini' ),
			) );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main><!-- #main -->
<?php
	get_sidebar();
	get_sidebar( 'singlebar' );
	get_footer();
?>
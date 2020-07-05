<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */

?>
<div id="app" class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-meta">
					<?php
					miss_albini_posted_on();
					?>
			</div><!-- .entry-meta -->
		
		</header><!-- .entry-header -->


		<div class="entry-content">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'miss_albini' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'miss_albini' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
				if ( 'post' === get_post_type() ) :
			?>
				
			<?php endif; ?>
			<?php miss_albini_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->

</div> <!-- Container ends -->

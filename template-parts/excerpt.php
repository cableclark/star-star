<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */
?>

<article id="excerpt-<?php the_ID(); ?>" class="excerpt">
	<?php miss_albini_post_thumbnail('large'); ?>
	<div class="excerpt-text">
		<header class="excerpt-header">
			<?php
			miss_albini_entry_footer(); 
			if ( is_singular() ) :
				the_title( '<h1 class="excerpt-title">', '</h1>' );
			else :
				the_title( '<h2 class="excerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="excerpt-meta"><?php miss_albini_posted_on();?></div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="excerpt-content">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'Miss Albini' ),
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
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Miss Albini' ),
					'after'  => '</div>',
				)
			);
			?>
		
			<a href="<?php esc_url( the_permalink()) ?>">
			<button class="read-more"> Read more...</button></a>
			
		</div><!-- .entry-content -->
	</div>	
	
</article><!-- #post-<?php the_ID(); ?> -->

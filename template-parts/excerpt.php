<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */
?>
<article id="excerpt-<?php the_ID(); ?>" class="excerpt card">
	<?php miss_albini_post_thumbnail(); ?>
	<div class="excerpt-text">
		<header class="excerpt-header">
		<?php
			miss_albini_entry_footer(); 
			the_title( '<h2 class="excerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
			<div class="excerpt-meta"><?php miss_albini_posted_on();?></div>

		</header>
		<div class="excerpt-content">
			<?php the_excerpt();
	 ?>
		<a href="<?php esc_url( the_permalink()) ?>"><button class="read-more"> Read more</button></a>
		</div>
	</div>	
</article>

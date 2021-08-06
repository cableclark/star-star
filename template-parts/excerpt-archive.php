<?php
/**
 * Template part for displaying posts
 *
 * @package Miss Albini
 */
?>
<div id="app" class="card margin-2">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<?php miss_albini_post_thumbnail('medium'); ?>
			<div class="m-1">
				<?php miss_albini_entry_footer(); ?>
			</div>	
			<?php the_title( '<h2 class="entry-title archive-h2 excerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
			<div class="entry-meta">
				<?php miss_albini_posted_on();?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_excerpt();?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php if ( 'post' === get_post_type() ) :
			 endif; ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->

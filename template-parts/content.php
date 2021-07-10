<?php
/**
 * Template part for displaying posts

 * @package Miss Albini
 */
?>
<div id="app" class="container">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<?php miss_albini_entry_footer(); ?>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="content-title">', '</h1>' );
			else :
				the_title( '<h2 class="content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-meta meta-on-page">
				<?php miss_albini_posted_on(); miss_albini_posted_by(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content();
			?>
			<?php miss_albini_get_tags(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->

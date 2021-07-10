<?php
/**
 * Template part for displaying single posts
 * 
 * @package Miss Albini
 */
?>
<div id="app">
	<article id="post-<?php the_ID(); ?>" class="single-article">
		<header class="entry-header">
			<div class="p-1">
				<?php miss_albini_entry_footer(); ?>
			</div>
			<?php the_title( '<h1 class="content-title">', '</h1>' );?>
			<div class="entry-meta page-meta">
					<?php
					miss_albini_posted_on();
					miss_albini_posted_by();
					?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content();
			miss_albini_get_tags(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miss Albini
 */

?>

	
</div> <!-- Container ends -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s, %2$s  by %3$s.', 'Miss Albini' ), 'Miss Albini', date('Y'), '<a href="https://www.github.com/cableclark">Igor Stojanovski</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>

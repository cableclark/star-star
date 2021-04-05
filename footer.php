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
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s, %2$s. ', 'Miss Albini.' ), 'In the lost and found', date('Y') );
			?>
		</div>
		<div >
		<div class="social-media">
			<div class="social-icon"> <a href="https://twitter.com/lostandfoundmkd" target="_blank"> <?php echo twitter_icon(); ?> </a> </div>
			<div class="social-icon"> <a href="https://www.instagram.com/inthelostandfoundmusic/" target="_blank"><?php echo instagram_icon(); ?> </a></div>
			</div>
		</div>	
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

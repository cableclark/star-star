			<footer id="colophon" class="site-footer">
				<div class="site-info">
					<?php
						printf( esc_html__( '%1$s, %2$s. ', 'Miss Albini.' ), 'Lost and found', date('Y') );
					?>
				</div>
				<div class="social-media">
					<div class="social-icon"> <a href="https://www.instagram.com/lostandfound.mk/" target="_blank"> <?php echo instagram_icon(); ?></a>
					</div>
					<div class="social-icon"> <a href="https://twitter.com/lostandfoundmkd" target="_blank"> <?php echo twitter_icon(); ?> </a>
					</div> 		
				</div>	
			</footer>
		</div>
	<?php wp_footer(); ?>
	</body>
</html>

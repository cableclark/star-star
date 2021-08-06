<?php
get_header();
?>
	<main id="primary" class="site-main">
		<div class="index-container">
		<?php
			if ( have_posts() ) :
				if ( is_home() && ! is_front_page() ) :?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif;
			/* Start the Loop */
			while (have_posts() ) :
				the_post();
				get_template_part( 'template-parts/excerpt', get_post_type() );
			endwhile;
			wp_reset_postdata();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;?>
		</div>
		<?php the_posts_pagination( array(
				'mid_size'  => 1,
				'prev_text' => __( '<', 'textdomain' ),
				'next_text' => __( '>', 'textdomain' ),
			) );
		?>
	</main>
<?php
$args = array(
    'posts_per_page' => 1, // we need only the latest post, so get that post only
    'cat' => '573', // Use the category id, can also replace with category_name which uses category slug
);
$q = new WP_Query( $args);
if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post();        
        //Your template tags and markup like:
		the_title();
		the_content();		
    }
    wp_reset_postdata();
}

dynamic_sidebar( 'album-of-the-week' );
get_sidebar();
get_footer();

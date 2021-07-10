<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package miss-albini
 */

if ( ! function_exists( 'miss_albini_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function miss_albini_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date('j. F, Y') ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date('j m, Y') )
		);
		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'miss-albini' ),
			 $time_string 
		);
		$icon = '<span class="svg-icon">' . date_function() . "</span>";
		echo '<span class="posted-on">' . $icon  . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'miss_albini_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function miss_albini_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( ' by: %s', 'post author', 'miss-albini' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'miss_albini_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function miss_albini_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'miss-albini' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__('%1$s', 'miss-albini' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;

function miss_albini_get_tags () {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'miss-albini' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'miss-albini' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
}

if ( ! function_exists( 'miss_albini_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function miss_albini_post_thumbnail($size="medium") {
		if ( is_singular() ) :
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail("medium_large"); ?>
			</div><!-- .post-thumbnail 1 -->
		<?php else : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php the_post_thumbnail('medium_large', ['alt' => the_title_attribute(['echo' => false])]);?>
			</a>
			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

if ( ! function_exists( 'date_function'  ) ) :
function date_function () {
	return '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
	<!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	
	<svg
	   version="1.1"
	   id="Capa_1"
	   x="0px"
	   y="0px"
	   viewBox="0 0 16 17"
	   xml:space="preserve"
	   sodipodi:docname="date-svgrepo-com.svg"
	   inkscape:version="1.1 (ce6663b3b7, 2021-05-25)"
	   width="16"
	   height="17"
	   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
	   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
	   xmlns="http://www.w3.org/2000/svg"
	   xmlns:svg="http://www.w3.org/2000/svg"><defs
	   id="defs49" /><sodipodi:namedview
	   id="namedview47"
	   pagecolor="#ffffff"
	   bordercolor="#666666"
	   borderopacity="1.0"
	   inkscape:pageshadow="2"
	   inkscape:pageopacity="0.0"
	   inkscape:pagecheckerboard="0"
	   showgrid="false"
	   inkscape:zoom="18.320908"
	   inkscape:cx="10.998363"
	   inkscape:cy="10.998363"
	   inkscape:window-width="1920"
	   inkscape:window-height="962"
	   inkscape:window-x="0"
	   inkscape:window-y="27"
	   inkscape:window-maximized="1"
	   inkscape:current-layer="Capa_1"
	   width="53px" />
	<g
	   id="g14"
	   transform="matrix(0.03662642,0,0,0.03662642,-0.51566044,0)">
		<path
	   d="M 142.5,35 H 345 v 47.5 c 0,4.143 3.358,7.5 7.5,7.5 4.142,0 7.5,-3.357 7.5,-7.5 V 27.51 27.5 27.49 7.5 C 360,3.357 356.642,0 352.5,0 348.358,0 345,3.357 345,7.5 V 20 H 142.5 c -4.142,0 -7.5,3.357 -7.5,7.5 0,4.143 3.358,7.5 7.5,7.5 z"
	   id="path2" />
		<path
	   d="m 432.5,20 h -50 c -4.142,0 -7.5,3.357 -7.5,7.5 0,4.143 3.358,7.5 7.5,7.5 H 425 v 95 H 40 V 35 h 65 v 47.5 c 0,4.143 3.358,7.5 7.5,7.5 4.142,0 7.5,-3.357 7.5,-7.5 V 7.5 C 120,3.357 116.642,0 112.5,0 108.358,0 105,3.357 105,7.5 V 20 H 32.5 C 28.358,20 25,23.357 25,27.5 v 370 c 0,4.143 3.358,7.5 7.5,7.5 h 330 c 0.251,0 0.501,-0.013 0.749,-0.038 0.186,-0.019 0.368,-0.05 0.549,-0.082 0.059,-0.01 0.119,-0.015 0.178,-0.026 0.214,-0.043 0.423,-0.099 0.63,-0.158 0.026,-0.008 0.054,-0.013 0.08,-0.021 0.208,-0.063 0.41,-0.138 0.609,-0.218 0.027,-0.011 0.054,-0.019 0.081,-0.029 0.189,-0.079 0.371,-0.168 0.552,-0.261 0.037,-0.02 0.076,-0.035 0.112,-0.055 0.165,-0.088 0.323,-0.187 0.48,-0.287 0.05,-0.031 0.102,-0.059 0.151,-0.092 0.146,-0.098 0.285,-0.205 0.423,-0.313 0.055,-0.043 0.113,-0.081 0.167,-0.125 0.169,-0.139 0.33,-0.287 0.486,-0.439 0.018,-0.019 0.039,-0.033 0.057,-0.052 l 70,-70 c 0.015,-0.015 0.027,-0.031 0.042,-0.046 0.157,-0.16 0.308,-0.324 0.451,-0.498 0.039,-0.047 0.071,-0.098 0.109,-0.145 0.114,-0.146 0.227,-0.292 0.33,-0.446 0.028,-0.041 0.05,-0.085 0.077,-0.127 0.106,-0.164 0.209,-0.331 0.301,-0.504 0.017,-0.03 0.029,-0.063 0.045,-0.094 0.096,-0.187 0.188,-0.375 0.269,-0.569 0.009,-0.022 0.015,-0.045 0.024,-0.066 0.082,-0.204 0.159,-0.411 0.223,-0.623 0.008,-0.025 0.012,-0.052 0.02,-0.077 0.061,-0.208 0.116,-0.418 0.159,-0.632 0.012,-0.061 0.017,-0.122 0.028,-0.183 0.031,-0.181 0.063,-0.36 0.081,-0.545 0.025,-0.248 0.038,-0.498 0.038,-0.749 V 27.5 C 440,23.357 436.642,20 432.5,20 Z M 40,145 h 385 v 175 h -62.5 c -4.142,0 -7.5,3.357 -7.5,7.5 V 390 H 40 Z M 414.394,335 370,379.394 V 335 Z"
	   id="path4" />
		<path
	   d="m 432.5,450 h -400 c -4.142,0 -7.5,3.357 -7.5,7.5 0,4.143 3.358,7.5 7.5,7.5 h 400 c 4.142,0 7.5,-3.357 7.5,-7.5 0,-4.143 -3.358,-7.5 -7.5,-7.5 z"
	   id="path6" />
		<path
	   d="m 432.5,350 c -4.142,0 -7.5,3.357 -7.5,7.5 V 420 H 40 v -2.5 c 0,-4.143 -3.358,-7.5 -7.5,-7.5 -4.142,0 -7.5,3.357 -7.5,7.5 v 10 c 0,4.143 3.358,7.5 7.5,7.5 h 400 c 4.142,0 7.5,-3.357 7.5,-7.5 v -70 c 0,-4.143 -3.358,-7.5 -7.5,-7.5 z"
	   id="path8" />
		<path
	   d="m 288.954,207.071 c -2.801,-1.16 -6.028,-0.521 -8.173,1.625 l -21.4,21.399 c -2.929,2.93 -2.929,7.678 0,10.607 2.929,2.928 7.678,2.928 10.606,0 l 8.597,-8.597 V 321 c 0,4.143 3.358,7.5 7.5,7.5 4.142,0 7.5,-3.357 7.5,-7.5 V 214 c -10e-4,-3.033 -1.828,-5.769 -4.63,-6.929 z"
	   id="path10" />
		<path
	   d="m 206.8,206.5 c -19.511,0 -35.384,15.873 -35.384,35.384 0,4.143 3.358,7.5 7.5,7.5 4.142,0 7.5,-3.357 7.5,-7.5 0,-11.239 9.144,-20.384 20.384,-20.384 11.239,0 20.383,9.145 20.383,20.384 0,8.15 -4.839,15.502 -12.329,18.729 -2.751,1.185 -4.533,3.893 -4.533,6.888 0,2.995 1.782,5.703 4.533,6.888 7.489,3.227 12.329,10.578 12.329,18.729 0,11.239 -9.144,20.384 -20.383,20.384 -11.24,0 -20.384,-9.145 -20.384,-20.384 0,-4.143 -3.358,-7.5 -7.5,-7.5 -4.142,0 -7.5,3.357 -7.5,7.5 0,19.511 15.873,35.384 35.384,35.384 19.51,0 35.383,-15.873 35.383,-35.384 0,-9.866 -4.085,-19.058 -10.966,-25.616 6.881,-6.559 10.966,-15.75 10.966,-25.616 C 242.184,222.373 226.311,206.5 206.8,206.5 Z"
	   id="path12" />
	</g>
	<g
	   id="g16">
	</g>
	<g
	   id="g18">
	</g>
	<g
	   id="g20">
	</g>
	<g
	   id="g22">
	</g>
	<g
	   id="g24">
	</g>
	<g
	   id="g26">
	</g>
	<g
	   id="g28">
	</g>
	<g
	   id="g30">
	</g>
	<g
	   id="g32">
	</g>
	<g
	   id="g34">
	</g>
	<g
	   id="g36">
	</g>
	<g
	   id="g38">
	</g>
	<g
	   id="g40">
	</g>
	<g
	   id="g42">
	</g>
	<g
	   id="g44">
	</g>
	</svg>'
	;
}

endif;
// /**
//  * Add a twitter card
//  */		

// function add_twitter_card ($post_id) {
// 	if(is_single() || is_page()) {
// 		$twitter_url    = get_permalink();
// 		$twitter_title  = get_the_title();
// 		$twitter_desc   = get_the_excerpt();
// 		$twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post_id));
// 		$twitter_thumb  = $twitter_thumbs[0];
// 			if(!$twitter_thumb) {
// 			$twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
// 		  }
// 	   $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
// 	   $twiter_card = "<meta name='twitter:card' value='summary'/>";
// 	   $twiter_card .= "<meta name='twitter:url' value='$twitter_url' />";
// 	   $twiter_card .= "<meta name='twitter:title' value='$twitter_title'/>";
// 	   $twiter_card .= "<meta name='twitter:description' value=' $twitter_desc;' />";
// 	   $twiter_card .= "<meta name='twitter:image' value='$twitter_thumb' />";
// 	   $twiter_card .= "<meta name='twitter:site' value='@inthelostandfound' />";
// 		if($twitter_name) {
// 			$twiter_card .= "<meta name='twitter:creator' value=.@ $twitter_name' />";
// 		}
// 		echo $twiter_card;
// 	  }
	
// }



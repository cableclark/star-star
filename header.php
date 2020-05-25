<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miss Albini
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'star-star' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$star_star_description = get_bloginfo( 'description', 'display' );
			if ( $star_star_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $star_star_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="toggler" aria-controls="primary-menu" aria-expanded="false"> <div> </div> <div> </div> <div> </div>  </div>
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);

			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return;
			}
			?>
		
				<svg
					class="search-icon"
					version="1.1"
					baseProfile="full"
					
					xmlns="http://www.w3.org/2000/svg" 
					viewBox="0 0 150.66 140.33">
				<defs><style>.cls-1{fill:#231f20;}</style></defs>
				<title>Search Icon</title>
				<g id="Layer_2" data-name="Layer 2">
					<g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M145.84,135,96.12,89.41a54.37,54.37,0,1,0-3.38,3.68l49.73,45.59a2.5,2.5,0,0,0,3.37-3.69Zm-91.4-29.11a51.44,51.44,0,1,1,51.44-51.44A51.5,51.5,0,0,1,54.44,105.88Z"/></g>
				</g>
				</svg>
			
			</div>
 

			<?php
			 dynamic_sidebar( 'sidebar-2' );
			?>

		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="app" class="container">

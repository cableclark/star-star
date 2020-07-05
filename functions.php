<?php
/**
 * Miss Albini functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Miss Albini
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'miss_albini_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function miss_albini_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on miss_albini, use a find and replace
		 * to change 'Miss-Albini' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'miss_albini', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'miss_albini' ),
				'social' => esc_html__( 'Social', 'miss_albini' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'MissAlbini_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'miss_albini_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function miss_albini_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'miss_albini_content_width', 740 );
}
add_action( 'after_setup_theme', 'miss_albini_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function miss_albini_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'miss_albini' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'miss_albini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-2', 'miss_albini' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'miss_albini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'miss_albini_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function miss_albini_scripts() {

	//Enqueue Google fonts

	wp_enqueue_style( 'miss_albini-fonts', 'ttps://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&display=swap');
	
	wp_enqueue_style( 'miss_albini-fonts2', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap');
	
	wp_enqueue_style( 'miss_albini-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'miss_albini-style', 'rtl', 'replace' );

	wp_enqueue_script( 'miss_albini-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'miss_albini-animations', get_template_directory_uri() . '/js/animations.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'miss_albini-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'miss_albini_scripts' );

/**
 * Force HTTPS for loading scripts
 */
function wp_secure_page_force_ssl( $force_ssl, $post_id = 0 ) {
    $force_ssl_on_these_posts = array(4729, 5547, 2493, 4679, 5454, 4192, 4750, 5473, 5344, 5183, 4222, 5135, 5492);

    if(in_array($post_id, $force_ssl_on_these_posts )) {
        return true;
    }

    return $force_ssl;
}
add_filter('force_ssl' , 'wp_secure_page_force_ssl', 1, 3);
/**
 * Add preconnect for Google Fonts.
 *
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function miss_albini_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'miss_albini-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}

add_filter( 'wp_resource_hints', 'miss_albini_resource_hints', 10, 2 );


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function wpforo_search_form( $html ) {

	$html = str_replace( 'placeholder="Пребарувај', 'placeholder=""', $html );


	return $html;
}
add_filter( 'get_search_form', 'wpforo_search_form' );


/**
 * Load svg icons variables
 */
require get_template_directory() . '/inc/svg-icons.php';


function my_search_form_text($text) {

	 $text = str_replace('value="Пребарувај"', 'value="Барај"', $text); //set as value the text you want
	 
     return $text . close_icon_svg ();
}

add_filter('get_search_form', 'my_search_form_text');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Loads a customized Archives widget
 */

require get_template_directory() . '/classes/class-my-archives.php';


function my_archives_widget_register() {
    unregister_widget( 'WP_Widget_Archives' );
    register_widget( 'My_Archives_Widget' );
}

add_action( 'widgets_init', 'my_archives_widget_register' );


/**
 * Loads a customized Recent Posts widget
 */

require get_template_directory() . '/classes/class-my-recent-posts.php';

function my_recent_posts_widget_register() {
    unregister_widget( 'WP_Widget_Recent_Posts' );
    register_widget( 'My_Custom_Recent_Posts_Widget' );
}

add_action( 'widgets_init', 'my_recent_posts_widget_register' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


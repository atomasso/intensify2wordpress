<?php
/**
 * Intensify to WordPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Intensify_to_WordPress
 */

if ( ! function_exists( 'intensify2wordpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function intensify2wordpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Intensify to WordPress, use a find and replace
		 * to change 'intensify2wordpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'intensify2wordpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * WordPress manage the document title.
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

		// Add support for HTML5 features
		add_theme_support( 'html5' );
		
		// Add support for automatic feed links
		add_theme_support( 'automatic-feed-links' );
		
		// Add support for custom background
		add_theme_support( 'custom-background' );

		// Add support for custom header
		add_theme_support( 'custom-header' );

		// Add support for logo
		add_theme_support( 'custom-logo' );

		// Add support for starter content
		add_theme_support( 'starter-content' );

		// Add support to customize selective refresh widgets
		add_theme_support( 'customize-selective-refresh-widgets' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'intensify2wordpress' ),
		) );

		// Load in custom CSS
		function intensify2wp_enqueue_styles() {
			wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
			wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', [], time(), 'all' );
			wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', [], time(), 'all' );
		}
		add_action( 'wp_enqueue_scripts', 'intensify2wp_enqueue_styles' );
		
		// Load in JS
		function intensify2wp_enqueue_scripts() {
			wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', [], time(), true );
			wp_enqueue_script( 'jquery-scrolly', get_stylesheet_directory_uri() . '/assets/js/jquery.scrolly.min.js', [], time(), true );
			wp_enqueue_script( 'skel', get_stylesheet_directory_uri() . '/assets/js/skel.min.js', [], time(), true );
			wp_enqueue_script( 'util', get_stylesheet_directory_uri() . '/assets/js/util.js', [], time(), true );
			wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', [], time(), true );
		}
		add_action( 'wp_enqueue_scripts', 'intensify2wp_enqueue_scripts' );

		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'intensify2wordpress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'intensify2wordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function intensify2wordpress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'intensify2wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'intensify2wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function intensify2wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'intensify2wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'intensify2wordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'intensify2wordpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function intensify2wordpress_scripts() {
	wp_enqueue_style( 'intensify2wordpress-style', get_stylesheet_uri() );

	wp_enqueue_script( 'intensify2wordpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'intensify2wordpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'intensify2wordpress_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Register custom post type - Testimonial
 */
function custom_post_type() {

	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => ( 'Testimonials' ),
				'singular_name' => ( 'Testimonial' )
			),
			'description' => 'Testimonial about the services presented on the page',
			// Features this CPT supports in Post Editor
			'supports' => array( 'title', 'editor', 'custom-fields',),
			'public' => true,
			'has_archive' => false
		)
	);
}
add_action( 'init', 'custom_post_type');

// Shorten the excerpt length to 20 words
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 
// Append 'Read More' link to the exceprt instead of ellipsis
function excerpt_readmore($more) {
	return '... <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More' . '</a>';
}	
add_filter('excerpt_more', 'excerpt_readmore');

// Remove image size attributes
function remove_image_size_attributes( $html ) {
	return preg_replace( '/(width|height)="\d*"/', '', $html );
}
// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );
// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

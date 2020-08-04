<?php
/**
 * cyberize functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cyberize
 */

if ( ! function_exists( 'cyberize_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cyberize_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cyberize, use a find and replace
		 * to change 'cyberize' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cyberize', get_template_directory() . '/languages' );

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
		add_image_size( 'blog-size', 400, 400, true );
		add_image_size( 'featured-size', 500, 300, true );
		add_image_size( 'featured-post-size', 600, 250, true );
		add_image_size( 'map-image', 300, 250, true );
		add_image_size( 'univ-mobile-size', 800, 560, true );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cyberize' ),
		) );

		// Portfolio Category Menu
		// register_nav_menus( array(
		// 	'portfolio' => esc_html__( 'Portfolio', 'cyberize' ),
		// ) );

		// Post Category Menu
		register_nav_menus( array(
			'post-cat' => esc_html__( 'Post Category', 'cyberize' ),
		) );

		// University Category Menu
		register_nav_menus( array(
			'univ-cat' => esc_html__( 'University Category', 'cyberize' ),
		) );

		// Global Dropdown Left Menu
		register_nav_menus( array(
			'global-dropdown-left-menu' => esc_html__( 'Global Dropdown Left Menu', 'cyberize' ),
		) );

		// Global Dropdown Right Menu 1
		register_nav_menus( array(
			'global-dropdown-right-menu-1' => esc_html__( 'Global Dropdown Right Menu 1', 'cyberize' ),
		) );
		// Global Dropdown Right Menu 2
		register_nav_menus( array(
			'global-dropdown-right-menu-2' => esc_html__( 'Global Dropdown Right Menu 2', 'cyberize' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'cyberize_custom_background_args', array(
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
add_action( 'after_setup_theme', 'cyberize_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cyberize_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cyberize_content_width', 640 );
}
add_action( 'after_setup_theme', 'cyberize_content_width', 0 );
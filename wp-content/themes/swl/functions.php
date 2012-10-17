<?php
/**
 * swl functions and definitions
 *
 * @package swl
 * @since swl 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since swl 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'swl_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since swl 1.0
 */
function swl_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on swl, use a find and replace
	 * to change 'swl' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'swl', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'swl' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // swl_setup
add_action( 'after_setup_theme', 'swl_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since swl 1.0
 */
function swl_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'swl' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'swl_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function swl_scripts() {

	//get foundation main styles
	wp_enqueue_style( 'zurb_foundations', get_template_directory_uri() .'/css/foundation.min.css', true );

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	
	// placeholder js	
	wp_enqueue_script( 'placeholder-js', get_template_directory_uri() . '/js/jquery.placeholder.js', array( 'jquery' ), '20120801', true );		
	
	// modernizer	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.foundation.js', array( 'jquery' ), '20120801', true );	
	
	//zurb foundation js
	wp_enqueue_script( 'zurb-js', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '20120801', true );
	
	// custom theme js	
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '20120801', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'swl_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

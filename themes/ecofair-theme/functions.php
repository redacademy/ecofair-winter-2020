<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecofair_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html( 'footer_sidebar' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Event Features' ),
		'id'            => 'event-features',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="features-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Banner' ),
		'id'            => 'banner-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="banner-widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'ecofair_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style('flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	
	if( is_front_page() || is_archive('workshop') || is_archive('volunteer') ) {
	    wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), false, true );
	    wp_enqueue_script( 'flickity-hash-js', 'https://unpkg.com/flickity-hash@1/hash.js', array(), false, true );
	    wp_enqueue_script( 'flickity-start-js', get_template_directory_uri() . '/build/js/start-carousel.min.js', array('flickity-js'), false, true );
	} elseif ( is_page('volunteer') ) {
	    wp_enqueue_script( 'volunteer-dropdown-start-js', get_template_directory_uri() . '/build/js/volunteer-dropdown.min.js', array(), false, true );
	    wp_localize_script('volunteer-dropdown-start-js', 'projectsListVolunteer', array(
		'projectsList' => get_posts(array(
		    'post_type'       => 'community_programs', 
		    'posts_per_page'  => -1,
		    'orderby'         => 'date',
		    'order'           => 'ASC',
		    'tag'             => 'volunteer'
		)),
	    ));
	    wp_enqueue_script( 'volunteer-success-start-js', get_template_directory_uri() . '/build/js/volunteer-success-submit.min.js', array(), false, true );
	    wp_localize_script('volunteer-success-start-js', 'homeUrl', array(
		'url' => get_permalink( get_page_by_title( 'Submitted!' ) )
	    ));
	} 

	wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/build/js/menu.min.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

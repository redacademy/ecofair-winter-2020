<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Filter the archive title
function remove_archive_from_title($title){
	if('workshop' == get_post_type()){
		$title = post_type_archive_title();
		return $title;
	} 
	else{
		return $title;
	}
}
add_filter('get_the_archive_title', 'remove_archive_from_title');

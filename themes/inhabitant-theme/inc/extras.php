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

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/inhabitant-assets/images/logos/Stare-logo.png) !important; 
		height: 120px !important; width: 410px !important; margin-left: -40px;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function my_login_logo_url() {
    return "https://www.w3schools.com/php/php_looping_for.asp";
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

add_filter( 'getarchives_where', function ( $where )
{
    $where = str_replace( "post_type = 'post'", "post_type IN ( 'journal' )", $where );
    return $where;
});
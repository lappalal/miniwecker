<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Miniwecker
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function miniwecker_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'miniwecker_infinite_scroll_render',
		'footer'    => 'colophon',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details' => array(
			'stylesheet' => 'miniwecker-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
	) );
}
add_action( 'after_setup_theme', 'miniwecker_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function miniwecker_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
/**
 * Modify the footer credits for JetPack Inifite Scroll
 **/
add_filter('infinite_scroll_credit','miniwecker_infinite_scroll_credit');

function miniwecker_infinite_scroll_credit(){
 $content = '<a href="/intern">Intern</a> | <a href="' . admin_url() . '">Login</a> | made by <a id="blog-title" href="http:" rel="home">Jakob Sautner</a>';
 return $content;
}
/** End JetPack **/

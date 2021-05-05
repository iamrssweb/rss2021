<?php
/**
 * The main template file
 *
 * This is the front-page. If this didn't exist, home.php would take 
 * precedence, and if that's missing, index.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RSS2021
 */
get_header(); ?>

<?php 
// Front page will only display posts from a given, configurable, category
$args = array( 
    'cat' => get_theme_mod( 'rss2021_home_page_category', 'homepage' ),
    'posts_per_page' => -1,
	'orderby'        => 'modified',
 ); 
 
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 
 
if ( $the_query->have_posts() ) : 
    // Start the Loop 
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
		// use templates for the guts of what to return in HTML
    	get_template_part( 'template-parts/content', 'home' );
    // End the Loop 
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>

<?php get_footer(); ?>
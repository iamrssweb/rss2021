<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rss2021
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php

		if ( have_posts() ) {

			$slug = get_post_field( 'post_name', get_post() );
			// based on the slug of this page, do a query using that as category
			?><header class="page-header"><?php the_title(); ?></header><?php

			// pages will only display posts from a given, configurable, category
			$args = array( 'category_name' => $slug ); 
 
			// Variable to call WP_Query. 
			$the_query = new WP_Query( $args ); 
 
			if ( $the_query->have_posts() ) {
				// Start the Loop 
				?><section class="page-articles"><?php
				while ( $the_query->have_posts() ) { 
					$the_query->the_post();
					// use templates for the guts of what to return in HTML
    				get_template_part( 'template-parts/content', 'page' );
	    		} // End the Loop 
				?></section><?php
			} else { 
				// If no posts match this query, output this text. 
		    	_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
			}
 
			wp_reset_postdata(); 
		}
		/*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		*/
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

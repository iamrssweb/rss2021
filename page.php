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

			//Protect against arbitrary paged values
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

			// pages will only display posts from a given, configurable, category
			$args = array(
				'category_name'  => $slug,
				'paged'          => $paged,
				//'orderby'        => 'modified',
			); 
 
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
				?>
				</section>
				<!-- Pagination -->
	
				<div class="pagination">
					<?php 
					$big = 999999999; // need an unlikely integer
 
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $the_query->max_num_pages
					) );
					?>
				</div>
				<?php
			} else { 
				// If no posts match this query, output this text. 
		    	_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
			}
 
			wp_reset_postdata(); 
		}
		?>

	</main><!-- #main -->

<?php
get_footer();

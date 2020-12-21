<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rss2021
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'rss2021' ), '<span>' . get_search_query() . '</span>' );
					?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			?><section class="page-articles"><?php
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			?></section><?php

			the_posts_navigation();

		else :

			?><section class="page-articles"><?php
			get_template_part( 'template-parts/content', 'none' );
			?></section><?php

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();

<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rss2021
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- thumbnail -->
	<?php rss2021_post_thumbnail(); ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt();
		// the_content();

		?>
		<div class="entry-meta">Posted by <?php the_author(); ?> on <?php the_date(); ?></div>
		<button onclick="window.location.href='<?php the_permalink(); ?>' " class="btn-readmore">Read more....</button>
		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rss2021' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
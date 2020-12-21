<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rss2021
 */

?>

<header class="page-header">
		<?php
		if ( is_singular() ) :
			the_title();
		else :
			the_title();
		endif;
		?>
</header><!-- .entry-header -->

<div id="post-container">
	<section id="blogpost">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php rss2021_post_thumbnail(); ?>

			<div class="entry-content">
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rss2021' ),
							array(
								'span' => array(
								'class' => array(),
							),
						)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rss2021' ),
						'after'  => '</div>',
					)
				);
			?>
			</div><!-- .entry-content -->

			<?php

				if ( 'post' === get_post_type() ) :
			?><div class="entry-meta"><?php
						rss2021_posted_on();
						rss2021_posted_by();
			?></div><!-- .entry-meta --><?php 
				endif; 
			?>
		</article>

		<footer class="entry-footer">
			<?php rss2021_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</section>

	<?php get_sidebar();?>
	
</div><!-- post-container -->

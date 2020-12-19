<?php
/**
 * Template part for displaying page content in front-page.php or home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RSS2021
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-page-home' ); ?>>
	<?php rss2021_post_thumbnail(); ?>

    <div class="article-container">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rss2021' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	</div><!-- .article-container -->

</article><!-- #post-<?php the_ID(); ?> -->

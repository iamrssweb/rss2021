<?php
/**
 * Template part for displaying a message that posts cannot be found as a result of a search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rss2021
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'rss2021' ); ?></h1>
	</header><!-- .page-header -->

	Sorry folks, cannot find what you are looking for.

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'rss2021' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'rss2021' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rss2021' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

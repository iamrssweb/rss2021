<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RSS2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- RSS2021 specific -->
    <link rel="stylesheet" href="https://use.typekit.net/kpx8cec.css">
    <script src="https://kit.fontawesome.com/60dfbc98f0.js" crossorigin="anonymous"></script>

	<!-- Facicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rss2021' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<?php
			the_custom_logo();
			?>

			<div id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- search: input box. Note the icon is added to the nav by functions.php -->
        <div id="main-searchbox">
            <?php  get_search_form(); ?>
		</div>
		<nav id="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'mobile-menu',
				)
			);
			?>
		</nav>
	</header><!-- #masthead -->

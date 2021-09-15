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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster" type="text/css">
    <script src="https://kit.fontawesome.com/60dfbc98f0.js" crossorigin="anonymous"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rss2021' ); ?></a>

	<div id="body-content">
		<!-- The rest of the header is found in the footer. This is for CSS placement -->

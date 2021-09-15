<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RSS2021
 */

?>

    </div> <!-- #body-content, opened in header.php -->
       <!-- footer starts here -->
	   <footer>
            <div id="footer-primary">
            <?php
			    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('page-footer-1') ) { }
            ?>
            <div class="copyright">
                &copy;
                <?php
                    $my_theme = wp_get_theme( $stylesheet, $theme_root );
                    echo $my_theme->get( 'AuthorURI'), " ";
                    echo $my_theme->get( 'Name' ) . " V" . $my_theme->get( 'Version' );
                ?>
            </div>
            </div>
            <div class="footer-top-decoration">
            </div>
        </footer>

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
		<div class="masthead-bottom-decoration">
            <span><!-- Here for CSS shapes --></span>
        </div>
	</header><!-- #masthead -->
    </div><!-- #page opened in header.php -->

    <?php wp_footer();?>

</body>
</html>

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

       <!-- footer starts here -->
	   <footer>
            <div class="top-decoration">
                <span><!-- Here for CSS shapes --></span></div>
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

        </footer>
    </div><!-- #page -->

    <?php wp_footer();?>

</body>
</html>

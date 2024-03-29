<?php
/**
 * RSS2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RSS2021
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('rss2021_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function rss2021_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on RSS2021, use a find and replace
         * to change 'rss2021' to the name of your theme in all the template files.
         */
        load_theme_textdomain('rss2021', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        add_image_size('small', 300, 9999); // 300px wide unlimited height
        add_image_size('medium-small', 450, 9999); // 300px wide unlimited height
        add_image_size('xl', 1200, 9999); // 1200px wide unlimited height
        add_image_size('xxl', 2000, 9999); // 2000px wide unlimited height
        add_image_size('xxxl', 3000, 9999); // 3000px wide unlimited height

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'rss2021'),
                'menu-2' => esc_html__('Mobile', 'rss2021'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'rss2021_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );

        /**
         * Gutenberg support
         * See https://www.billerickson.net/building-a-gutenberg-website/
         */
        /* full and wide images */
        add_theme_support('align-wide');

        // -- Disable custom font sizes
        add_theme_support('disable-custom-font-sizes');

        // -- Editor Font Sizes
        /*
        add_theme_support( 'editor-font-sizes', array(
        array(
        'name'      => __( 'Small', 'ea_genesis_child' ),
        'shortName' => __( 'S', 'ea_genesis_child' ),
        'size'      => 12,
        'slug'      => 'small'
        ),
        array(
        'name'      => __( 'Normal', 'ea_genesis_child' ),
        'shortName' => __( 'M', 'ea_genesis_child' ),
        'size'      => 16,
        'slug'      => 'normal'
        ),
        array(
        'name'      => __( 'Large', 'ea_genesis_child' ),
        'shortName' => __( 'L', 'ea_genesis_child' ),
        'size'      => 20,
        'slug'      => 'large'
        ),
        ) );
         */
        // - Disable custom colors
        add_theme_support('disable-custom-colors');
        add_theme_support('editor-color-palette', array(
            array(
                'name' => __('RSS Blue'),
                'slug' => __('rss-blue'),
                'color' => '#00b2e2',
            ),
            array(
                'name' => __('RSS Dark Blue'),
                'slug' => __('rss-dark-blue'),
                'color' => '#007cb0',
            ),
            array(
                'name' => __('RSS Grey'),
                'slug' => __('rss-grey'),
                'color' => '#2c3d4a',
            ),
            array(
                'name' => __('RSS Yellow'),
                'slug' => __('rss-yellow'),
                'color' => '#ffc222',
            ),
            array(
                'name' => __('RSS Red'),
                'slug' => __('rss-red'),
                'color' => '#e22849',
            ),
            array(
                'name' => __('Roadsign Brown'),
                'slug' => __('roadsign-brown'),
                'color' => '#794500',
            ),
            array(
                'name' => __('Roadsign Green'),
                'slug' => __('roadsign-green'),
                'color' => '#00703c',
            ),
            array(
                'name' => __('Roadsign Red'),
                'slug' => __('roadsign-red'),
                'color' => '#e31836',
            ),
            array(
                'name' => __('Roadsign Blue'),
                'slug' => __('roadsign-blue'),
                'color' => '#007ac1',
            ),
            array(
                'name' => __('Roadsign Yellow'),
                'slug' => __('roadsign-yellow'),
                'color' => '#ffd000',
            ),
            array(
                'name' => __('white'),
                'slug' => __('white'),
                'color' => '#ffffff',
            ),
            array(
                'name' => __('black'),
                'slug' => __('black'),
                'color' => '#000000',
            ),
        ));
        // Get the editors to use the styles
        add_theme_support('editor-styles');
        add_editor_style('css/editor-style.css');

        // Support block styles
        add_theme_support('wp-block-styles');
    }
endif;
add_action('after_setup_theme', 'rss2021_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rss2021_content_width()
{
    $GLOBALS['content_width'] = apply_filters('rss2021_content_width', 1920);
}
add_action('after_setup_theme', 'rss2021_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rss2021_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'rss2021'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'rss2021'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Page Footer', 'iamrss'),
            'id' => 'page-footer-1',
            'description' => esc_html__('Add widgets here.', 'iamrss'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
}
add_action('widgets_init', 'rss2021_widgets_init');

/**
 * Enqueue scripts and styles.
 */
if (!function_exists('rss2021_scripts')):
    function rss2021_scripts()
{
        wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/kpx8cec.css');
        wp_enqueue_style('rss2021-style', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('rss2021-style', 'rtl', 'replace');

        wp_enqueue_script('rss2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/60dfbc98f0.js');
        wp_enqueue_script('rss2021-js', get_theme_file_uri('/js/menusearch.js'), null, microtime(), true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
endif;
add_action('wp_enqueue_scripts', 'rss2021_scripts');

/**
 * Add image size names to choose from
 */
if (!function_exists('rss2021_custom_add_image_size_names')):
    function rss2021_custom_add_image_size_names($sizes) {
        return array_merge($sizes, array(
            'small' => __('Small'),
            'medium-small' => __('Medium Small'),
            'xl' => __('Extra Large'),
            'xxl' => __('2x Extra Large'),
            'xxxl' => __('3x Extra Large'),
        ));
    }
endif;
add_filter('image_size_names_choose', 'rss2021_custom_add_image_size_names');

/**
 * Add a search menu item to the nav menus
 */
if (!function_exists('rss2021_add_search_box')):
    function rss2021_add_search_box($items, $args) {
        $items .= '<li><div id="mainsearch-icon"> <i class="fas fa-search"></i> </div></li>';
        return $items;
    }
endif;
add_filter('wp_nav_menu_items', 'rss2021_add_search_box', 10, 2);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/* put post IDs onto the admin pages */
add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
 
function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
    if($column_name === 'wps_post_id'){
            echo $id;
    }
}
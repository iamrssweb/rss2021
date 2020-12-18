<?php
/**
 * RSS2021 Theme Customizer
 *
 * @package RSS2021
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rss2021_customize_register($wp_customize)
{

/* acknowledgement for the category drop down customizer goes to
https://www.cssigniter.com/wordpress-customizer-custom-controls-categories-dropdown/
 */

    require_once get_stylesheet_directory() . '/inc/dropdown-control.php';

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector' => '.site-title a',
                'render_callback' => 'rss2021_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector' => '.site-description',
                'render_callback' => 'rss2021_customize_partial_blogdescription',
            )
        );
    }
    /* Customize HomePage Options to allow selection of the category of posts
     * used on the front page
     * */
    $wp_customize->add_section('rss2021-homepage', array(
        'title' => esc_html_x('Homepage Options', 'customizer section title'),
    ));

    $wp_customize->add_setting('rss2021_home_page_category', array(
        'default' => 0,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new rss2021_Dropdown_Category_Control($wp_customize, 'rss2021_home_page_category', array(
        'section' => 'rss2021-homepage',
        'label' => esc_html__('Homepage posts category'),
        'description' => esc_html__('Select the category that the hompepage will show posts from. If no category is selected, it looks for category homepage'),
    )));
}
add_action('customize_register', 'rss2021_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function rss2021_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function rss2021_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rss2021_customize_preview_js()
{
    wp_enqueue_script('rss2021-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'rss2021_customize_preview_js');

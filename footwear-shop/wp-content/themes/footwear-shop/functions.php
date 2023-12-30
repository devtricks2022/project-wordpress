<?php
/**
 * footwear shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package footwear_shop
 */
// VARIABLES
define("THEME_PATH",get_theme_file_path());
define("THEME_URL",get_theme_file_uri());


// INCLUDES
require THEME_PATH."/inc/setup.php";
require THEME_PATH."/inc/enqueue.php";

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// HOOKS
add_action( 'after_setup_theme', 'footwear_shop_setup' );
add_action( 'wp_enqueue_scripts', 'footwear_shop_styles' );
add_action( 'wp_footer', 'footwear_shop_scripts' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function footwear_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'footwear_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'footwear_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

add_action( 'widgets_init', 'footwear_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'footwear_shop_scripts' );





// REMOVES

// SHORTCODES


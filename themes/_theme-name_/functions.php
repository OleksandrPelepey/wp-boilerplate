<?php
/**
 * _theme-name_ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _theme-name_
 */

/**
 * Composer autoloader
 */
require_once( get_template_directory() . '/vendor/autoload.php' );

/**
 * Boot carbon fields plugin
 */
function theme_slug__crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'theme_slug__crb_load' );

/**
 * Theme setup
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Sidebars
 */
require get_template_directory() . '/inc/theme-sidebars.php';

/**
 * Scripts
 */
require get_template_directory() . '/inc/theme-scripts.php';

/**
 * Styles
 */
require get_template_directory() . '/inc/theme-styles.php';

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

/**
 * Register all custom post types.
 */
require get_template_directory() . '/custom-post-types/index.php';

/**
 * Register all taxonomies.
 */
require get_template_directory() . '/custom-taxonomies/index.php';

/**
 * Register all metaboxes.
 */
require get_template_directory() . '/metaboxes/index.php';

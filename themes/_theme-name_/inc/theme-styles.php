<?php
/**
 * Enqueue styles.
 *
 * @package _theme-name_
 */

function theme_slug__styles() {
    wp_enqueue_style( 'theme_slug_-main', get_template_directory_uri() . '/assets/dist/styles/main.css', array(), '20151215' );
}
add_action( 'wp_enqueue_scripts', 'theme_slug__styles' );
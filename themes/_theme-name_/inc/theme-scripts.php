<?php
/**
 * Enqueue scripts and styles.
 *
 * @package _theme-name_
 */

function theme_slug__scripts() {

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'theme_slug_-main', get_template_directory_uri() . '/assets/dist/js/main.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'theme_slug__scripts' );
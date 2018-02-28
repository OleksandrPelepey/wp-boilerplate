<?php
/**
 * Example meta
 * 
 * @package _theme_name_
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function theme_slug__attach_post_options() {
    Container::make( 'post_meta', 'theme_slug__post_example_options' , __( 'Post example options', 'theme_slug_' ) )
        ->set_context( 'carbon_fields_after_title' )
        ->where( 'post_type', '=', 'post' )
        ->add_fields( array(
            Field::make( 'text', 'theme_slug__short_title', __( 'Short title', 'theme_slug_' ) ),
        ) );
}
add_action( 'carbon_fields_register_fields', 'theme_slug__attach_post_options' );

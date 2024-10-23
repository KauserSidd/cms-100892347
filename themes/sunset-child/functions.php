<?php
/**
 * sunset-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sunset-child
 * @since sunset-child 1.0
 */

function child_wp_enqueue_scripts() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
    );
}
add_action( 'wp_enqueue_scripts', 'child_wp_enqueue_scripts' );
<?php
// Enqueue styles
function blank_theme_enqueue_styles() {
    wp_enqueue_style('blank-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'blank_theme_enqueue_styles');

// Add theme support for various features
function blank_theme_setup() {
    // Add support for block styles
    add_theme_support('wp-block-styles');
    
    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');
    
    // Add support for custom line height controls
    add_theme_support('custom-line-height');
    
    // Add support for custom units
    add_theme_support('custom-units');
}
add_action('after_setup_theme', 'blank_theme_setup');

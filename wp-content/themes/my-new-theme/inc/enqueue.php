<?php
function my_new_theme_enqueue_styles() {
    // Enqueue main style.css
    wp_enqueue_style(
        'my-new-theme-style', 
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue main.css
    wp_enqueue_style(
        'my-new-theme-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'my-new-theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_new_theme_enqueue_styles');
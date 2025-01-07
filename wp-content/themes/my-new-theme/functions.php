<?php
// Include setup
require_once get_template_directory() . '/inc/setup.php';

// Include customizer
require_once get_template_directory() . '/inc/customizer.php';

// Include enqueue
require_once get_template_directory() . '/inc/enqueue.php';

// Register navigation menus
function my_new_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-new-theme'),
        'footer' => __('Footer Menu', 'my-new-theme')
    ));
}
add_action('after_setup_theme', 'my_new_theme_menus');

// Register sidebar
function my_new_theme_widgets() {
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'my-new-theme'),
        'id'            => 'primary-sidebar',
        'description'   => __('Main sidebar that appears on the right.', 'my-new-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_theme_support('custom-logo', array(
    'height'      => 70,  // Sesuaikan dengan kebutuhan
    'width'       => 200, // Sesuaikan dengan kebutuhan
    'flex-height' => true,
    'flex-width'  => true,
));
add_action('widgets_init', 'my_new_theme_widgets');
<!-- Hooks en JS / Stylesheets -->

<?php
// LAADT CSS IN HEADER
function load_stylesheets() {

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');

    wp_enqueue_style( 'style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// LAADT JS IN FOOTER
function load_js() {

    wp_register_script('customjs', get_template_directory_uri() . '/js/app.js', '', 1, true);
    wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'load_js');

// NAV MENU ACTIVEREN
add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')

    )
);

// BLOG IMAGE RESIZING
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
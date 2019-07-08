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

// IMAGEUPLOADER KIEZEN
function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

?>
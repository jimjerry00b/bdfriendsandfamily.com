<?php

// Include the Bootstrap Nav Walker
require_once get_template_directory() . '/inc/class-bootstrap-nav-walker.php';

function mytheme_setup() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme'),
        'footer' => __('Footer Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


?>
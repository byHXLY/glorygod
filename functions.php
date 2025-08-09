<?php

function glorygod_theme_setup() {
    add_theme_support('title-tag');
    register_nav_menus([
        'main' => __('Главное меню', 'glorygod'),
    ]);
}
add_action('after_setup_theme', 'glorygod_theme_setup');

function glorygod_enqueue_assets() {
    wp_enqueue_style('glorygod-ui', get_template_directory_uri() . '/assets/css/ui.css', [], '1.0');
    wp_enqueue_style('glorygod-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'glorygod_enqueue_assets');

function glorygod_nav_link_class($atts, $item, $args) {
    $atts['class'] = trim(($atts['class'] ?? '') . ' nav-link');
    return $atts;
}
add_filter('nav_menu_link_attributes', 'glorygod_nav_link_class', 10, 3);


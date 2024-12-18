<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function my_theme_enqueue_styles() {
    // Enqueue le fichier CSS principal
    wp_enqueue_style('my-style', get_stylesheet_uri());
    
    // Enqueue le fichier JavaScript de la modal avec le bon chemin
    wp_enqueue_script('modal-script', get_template_directory_uri() . '/modal.js', array(), '1.0', true); // Charge modal.js dans le footer
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');



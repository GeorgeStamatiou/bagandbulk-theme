<?php

// ----------------------
// STYLES
// ----------------------
function bagandbulk_enqueue_styles() {

    // Load root style.css
    wp_enqueue_style('bagandbulk-style', get_stylesheet_uri(), [], '1.0');

    // Google Fonts
    wp_enqueue_style(
        'bagandbulk-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Main custom stylesheet (loads last)
    wp_enqueue_style(
        'bagandbulk-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['bagandbulk-style'],
        '1.1',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'bagandbulk_enqueue_styles');


// ----------------------
// THEME SETUP
// ----------------------
function bagandbulk_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'bagandbulk'),
    ]);
}
add_action('after_setup_theme', 'bagandbulk_setup');


// ----------------------
// SCRIPTS (JS)
// ----------------------
function bbh_enqueue_scripts() {

    wp_enqueue_script(
        'bbh-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(), 
        null, 
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'bbh_enqueue_scripts');

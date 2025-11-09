<?php
function bagandbulk_enqueue_styles() {
  // Main theme stylesheet
  wp_enqueue_style('bagandbulk-style', get_stylesheet_uri());
  // Custom CSS file
  wp_enqueue_style('bagandbulk-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'bagandbulk_enqueue_styles');

function bagandbulk_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'primary' => __('Primary Menu', 'bagandbulk'),
  ]);
}
add_action('after_setup_theme', 'bagandbulk_setup');

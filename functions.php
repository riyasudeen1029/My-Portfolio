<?php

function my_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_portfolio_setup');

function my_portfolio_styles() {
    wp_enqueue_style('my-portfolio-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'my_portfolio_styles');

function my_portfolio_scripts() {
    wp_enqueue_script('my-portfolio-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');
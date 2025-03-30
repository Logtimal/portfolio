<?php


function portfolio_child_enqueue_styles() {
    wp_enqueue_style('parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('twentytwentyfour')->get('Version')
    );

    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'portfolio_child_enqueue_styles');

require_once get_stylesheet_directory() . '/cpt-portfolio.php';

function portfolio_flush_rules() {
    flush_rewrite_rules();
}
add_action('init', 'portfolio_flush_rules', 99);



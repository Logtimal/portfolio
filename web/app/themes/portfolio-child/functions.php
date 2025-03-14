<?php
// Charger les styles du thème parent
function portfolio_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'portfolio_child_enqueue_styles');

// Inclure le fichier CPT Portfolio
require_once get_stylesheet_directory() . '/cpt-portfolio.php';
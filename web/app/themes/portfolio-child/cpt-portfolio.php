<?php
// Enregistrement du CPT Portfolio
function portfolio_register_post_type() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Réalisation',
        'menu_name'          => 'Portfolio',
        'add_new'            => 'Ajouter une réalisation',
        'add_new_item'       => 'Ajouter une nouvelle réalisation',
        'edit_item'          => 'Modifier la réalisation',
        'new_item'           => 'Nouvelle réalisation',
        'view_item'          => 'Voir la réalisation',
        'search_items'       => 'Rechercher des réalisations',
        'not_found'          => 'Aucune réalisation trouvée',
        'not_found_in_trash' => 'Aucune réalisation trouvée dans la corbeille'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'portfolio'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'        => true,
    );

    register_post_type('portfolio', $args);

    // Enregistrement de la taxonomie pour les catégories de portfolio
    $tax_labels = array(
        'name'              => 'Catégories de portfolio',
        'singular_name'     => 'Catégorie de portfolio',
        'search_items'      => 'Rechercher des catégories',
        'all_items'         => 'Toutes les catégories',
        'parent_item'       => 'Catégorie parente',
        'parent_item_colon' => 'Catégorie parente:',
        'edit_item'         => 'Modifier la catégorie',
        'update_item'       => 'Mettre à jour la catégorie',
        'add_new_item'      => 'Ajouter une nouvelle catégorie',
        'new_item_name'     => 'Nom de la nouvelle catégorie',
        'menu_name'         => 'Catégories'
    );

    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('portfolio_category', array('portfolio'), $tax_args);
}
add_action('init', 'portfolio_register_post_type');
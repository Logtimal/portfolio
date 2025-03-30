<?php

function portfolio_register_post_type() {
    // Labels pour l'interface d'administration
    $labels = array(
        'name'                  => _x('Portfolio', 'Post type general name', 'portfolio-child'),
        'singular_name'         => _x('Réalisation', 'Post type singular name', 'portfolio-child'),
        'menu_name'             => _x('Portfolio', 'Admin Menu text', 'portfolio-child'),
        'name_admin_bar'        => _x('Réalisation', 'Add New on Toolbar', 'portfolio-child'),
        'add_new'               => __('Ajouter', 'portfolio-child'),
        'add_new_item'          => __('Ajouter une réalisation', 'portfolio-child'),
        'new_item'              => __('Nouvelle réalisation', 'portfolio-child'),
        'edit_item'             => __('Modifier la réalisation', 'portfolio-child'),
        'view_item'             => __('Voir la réalisation', 'portfolio-child'),
        'all_items'             => __('Toutes les réalisations', 'portfolio-child'),
        'search_items'          => __('Rechercher des réalisations', 'portfolio-child'),
        'parent_item_colon'     => __('Réalisation parente:', 'portfolio-child'),
        'not_found'             => __('Aucune réalisation trouvée.', 'portfolio-child'),
        'not_found_in_trash'    => __('Aucune réalisation trouvée dans la corbeille.', 'portfolio-child'),
        'featured_image'        => __('Image à la une de la réalisation', 'portfolio-child'),
        'set_featured_image'    => __('Définir l\'image à la une', 'portfolio-child'),
        'remove_featured_image' => __('Supprimer l\'image à la une', 'portfolio-child'),
        'use_featured_image'    => __('Utiliser comme image à la une', 'portfolio-child'),
        'archives'              => __('Archives des réalisations', 'portfolio-child'),
        'insert_into_item'      => __('Insérer dans la réalisation', 'portfolio-child'),
        'uploaded_to_this_item' => __('Téléversé sur cette réalisation', 'portfolio-child'),
        'filter_items_list'     => __('Filtrer la liste des réalisations', 'portfolio-child'),
        'items_list_navigation' => __('Navigation de la liste des réalisations', 'portfolio-child'),
        'items_list'            => __('Liste des réalisations', 'portfolio-child'),
    );

    // Arguments pour le CPT
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'revisions',
        ),
        'show_in_rest'       => true,
        'taxonomies'         => array('portfolio_category'),
    );

    register_post_type('portfolio', $args);
}


function portfolio_register_taxonomy() {
    $labels = array(
        'name'                       => _x('Catégories de portfolio', 'taxonomy general name', 'portfolio-child'),
        'singular_name'              => _x('Catégorie de portfolio', 'taxonomy singular name', 'portfolio-child'),
        'search_items'               => __('Rechercher des catégories', 'portfolio-child'),
        'popular_items'              => __('Catégories populaires', 'portfolio-child'),
        'all_items'                  => __('Toutes les catégories', 'portfolio-child'),
        'parent_item'                => __('Catégorie parente', 'portfolio-child'),
        'parent_item_colon'          => __('Catégorie parente:', 'portfolio-child'),
        'edit_item'                  => __('Modifier la catégorie', 'portfolio-child'),
        'update_item'                => __('Mettre à jour la catégorie', 'portfolio-child'),
        'add_new_item'               => __('Ajouter une nouvelle catégorie', 'portfolio-child'),
        'new_item_name'              => __('Nom de la nouvelle catégorie', 'portfolio-child'),
        'separate_items_with_commas' => __('Séparer les catégories avec des virgules', 'portfolio-child'),
        'add_or_remove_items'        => __('Ajouter ou supprimer des catégories', 'portfolio-child'),
        'choose_from_most_used'      => __('Choisir parmi les plus utilisées', 'portfolio-child'),
        'not_found'                  => __('Aucune catégorie trouvée.', 'portfolio-child'),
        'menu_name'                  => __('Catégories', 'portfolio-child'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'portfolio-category'),
        'show_in_rest'          => true,
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}

function portfolio_add_default_terms() { // j'ai eu des problèmes
    if (!term_exists('Web', 'portfolio_category')) {
        wp_insert_term('Web', 'portfolio_category');
    }

    if (!term_exists('Design', 'portfolio_category')) {
        wp_insert_term('Design', 'portfolio_category');
    }

    if (!term_exists('Photographie', 'portfolio_category')) {
        wp_insert_term('Photographie', 'portfolio_category');
    }
}

function portfolio_rewrite_flush() {
    portfolio_register_post_type();
    portfolio_register_taxonomy();

    flush_rewrite_rules();
}

add_action('init', 'portfolio_register_post_type');
add_action('init', 'portfolio_register_taxonomy');

add_action('init', 'portfolio_add_default_terms');

add_action('after_switch_theme', 'portfolio_rewrite_flush');
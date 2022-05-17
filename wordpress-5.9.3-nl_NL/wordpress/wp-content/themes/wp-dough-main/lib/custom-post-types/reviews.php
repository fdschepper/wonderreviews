<?php

add_action('init', 'reviewsPostType');

function reviewsPostType()
{
    $args = [
        'labels' => [
            'name' => 'Reviews',
            'singular_name' => 'Reviews',
            'all_items' => 'Al de Reviews',
            'edit_item' => 'Reviews bewerken',
            'add_new' => 'Reviews aanmaken',
            'add_new_item' => 'Reviews toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-customizer',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'reviews',
        ],
    ];

    \register_post_type('reviews', $args);

}


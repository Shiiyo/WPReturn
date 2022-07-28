<?php

class AppInit
{
    public static function register()
    {
        add_action('init', [self::class, 'init']);
    }
    
    public static function init()
    {
        register_taxonomy('sport', 'post', [
            'labels' => [
                'name' => 'Sport',
                'singular_name' => 'Sport',
                'plural_name' => 'Sports',
                'search_items' => 'Rechercher des sports',
                'all_items' => 'Tous les sports',
                'edit_item' => 'Editer le sport',
                'update_item' => 'Mettre à jour le sport',
                'add_new_item' => 'Ajouter un nouveau sport',
                'new_item_name' => 'Ajouter un nouveau sport',
                'menu_name' => 'Sport'
            ],
            'show_in_rest' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
        ]);
        register_post_type('bien', [
            'label' => 'Bien',
            'public' => true,
            'menu_position' => 3,
            'menu_icon' =>'dashicons-building',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive'=> true,
        ]);
    }
}
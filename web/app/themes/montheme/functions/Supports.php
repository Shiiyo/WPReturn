<?php

class Support 
{
    public static function register()
    {
        add_action('after_setup_theme', [self::class, 'supports']);
    }

    public static function supports()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En-tête du menu');

        add_image_size('post-thumbnail', 416, 300, true);
    }
}
<?php

class InsertAssets
{
    public static function register()
    {
        add_action('wp_enqueue_scripts', [self::class, 'add']);
    }
    
    public static function add()
    {
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }
}
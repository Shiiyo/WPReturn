<?php

class Menu
{
    public static function register()
    {
        add_filter('nav_menu_css_class', [self::class, 'menu_class']);
        add_filter('nav_menu_link_attributes', [self::class, 'link_class']);
    }

    public static function menu_class($classes)
    {
        $classes[] = 'nav-item';
        return $classes;
    }

    public static function link_class($attrs)
    {
        $attrs['class'] = 'nav-link';
        return $attrs;
    }
}
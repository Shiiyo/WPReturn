<?php

class Title 
{
    public static function register()
    {
        add_filter('document_title_separator', [self::class, 'separator']);
    }
    
    public static function separator()
    {
        return '|';
    }
}
<?php

require_once('YoutubeWidget.php');

class Widget
{
    public static function register()
    {
        add_action('widgets_init', [self::class, 'registerWidget']);
    }
    
    public static function registerWidget()
    {
        register_widget(YoutubeWidget::class);
        register_sidebar([
            'id' => 'homepage',
            'name' => 'Sidebar Accueil',
            'before_widget' => '<div class="p-4 %2$s" id="%1$s">',
            'after_widget' => '</div>',
        ]);
    }

}
<?php

class Biens 
{
    public static function register()
    {
        add_filter('manage_bien_posts_columns', function ($columns) {
            return [
                'cb' => $columns['cb'],
                'thumbnail' => 'Miniature',
                'title' => $columns['title'],
                'date' => $columns['date'],
            ];
        });

        add_filter('manage_bien_posts_custom_column', function ($column, $postId) {
            if ($column === 'thumbnail') {
                the_post_thumbnail('thumbnail', $postId);
            }
        },
            10,
            2
        );

        add_action('admin_enqueue_scripts', function () {
            wp_enqueue_style('admin_montheme', get_template_directory_uri() . '/assets/admin.css');
        });
    }
}
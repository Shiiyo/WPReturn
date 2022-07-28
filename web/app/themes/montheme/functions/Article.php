<?php

class Article
{
    public static function register()
    {
        add_filter('manage_post_posts_columns', function ($columns) {
            $newColumns = [];
            foreach ($columns as $k => $v) {
                if ($k === 'date') {
                    $newColumns['sponso'] = 'Article sponsorisé ?';
                }
                $newColumns[$k] = $v;
            }
            return $newColumns;
        });

        add_filter(
            'manage_post_posts_custom_column',
            function ($column, $postId) {
                if ($column === 'sponso') {
                    if(!empty(get_post_meta($postId, SponsoMetaBox::META_KEY, true))){
                        $class = 'yes';
                    }else{
                        $class = 'no';
                    }
                    echo '<div class="bullet bullet-' . $class . '"></div>';
                }
            },
            10,
            2
        );
    }
}
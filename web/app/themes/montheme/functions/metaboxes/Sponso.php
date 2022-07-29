<?php

class SponsoMetaBox
{
    const META_KEY = 'montheme_sponso';

    public static function register()
    {
        add_action('add_meta_boxes', [self::class, 'add'], 10, 2);
        add_action('save_post', [self::class, 'save']);
        add_action('pre_get_posts', [self::class, 'pre_get_posts']);
        add_filter('query_vars', [self::class, 'query_vars']);
    }

    public static function pre_get_posts(WP_Query $query)
    {
        if (is_admin() || !is_search() || !$query->is_main_query()) {
            return;
        }
        if (get_query_var('sponso') === '1') {
            $meta_query = $query->get('meta_query', []);
            $meta_query[] = [
                'key' => self::META_KEY,
                'compare' => 'EXISTS',
            ];
            $query->set('meta_query', $meta_query);
        }
    }

    public static function query_vars($params)
    {
        $params[] = 'sponso';
        return $params;
    }

    public static function add($postType, $post)
    {
        if($postType === 'post' && current_user_can('publish_posts', $post))
        {
            add_meta_box(self::META_KEY, 'Sponsoring', [self::class, 'render'], 'post', 'side');
        }
    
    }

    public static function render($post)
    {
        $value = get_post_meta($post->ID, self::META_KEY, true);
        ?>
        <input type="hidden" value="0" name="<?= self::META_KEY ?>">
        <input type="checkbox" value="1" name="<?= self::META_KEY ?>" <?= checked($value, '1') ?>>
        <label for="<?= self::META_KEY ?>">Cet article est sponsorisé ?</label>
        <?php
    }

    public static function save($post_id)
    {
        if (array_key_exists(self::META_KEY, $_POST) && current_user_can('publish_posts', $post_id)) {
            if ($_POST[self::META_KEY] === '0') {
                delete_post_meta($post_id, self::META_KEY);
            } else {
                update_post_meta($post_id, self::META_KEY, '1');
            }
        }
    }
}

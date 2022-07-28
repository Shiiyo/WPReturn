<?php

class Pagination
{
    public static function paginate()
    {
        $pages = paginate_links(['type' => 'array']);
        if ($pages === null) {
            return;
        }

        echo '<nav aria-label="Pagination">';
        echo '<ul class="pagination my-4">';

        foreach ($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = 'page-item';
            if ($active) {
                $class .= ' active';
            }
            echo '<li class="' . $class . '">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }
        echo '</ul> </nav>';
    }
}
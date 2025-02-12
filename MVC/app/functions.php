<?php

function view($name, $model = '')
{
    global $view_bag;
    require("views/layout.view.php");
}

function redirect($url)
{
    header("Location: $url");
    die();
}

function get_term($term)
{
    $terms = get_terms();

    foreach ($terms as $item) {
        if ($item->term == $term) {
            return $item;
        }
    }

    return false;
}

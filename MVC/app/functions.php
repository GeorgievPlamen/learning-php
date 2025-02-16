<?php

function view($name, $model = '')
{
    global $view_bag;
    require(APP_NAME . "views/layout.view.php");
}

function redirect($url)
{
    header("Location: $url");
    die();
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function sanitize($value)
{
    $temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

    if ($temp === false) {
        return '';
    }

    return $temp;
}

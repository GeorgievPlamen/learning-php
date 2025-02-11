<?php

function pluck($arr, $key)
{
    $results = array_map(function ($item) use ($key) {
        return $item[$key];
    }, $arr);

    return $results;
}


function sum($a, $b)
{
    return $a + $b;
}

function output($value = ["empty"])
{
    echo '
<pre>';
    print_r($value);
    echo '</pre>';
}

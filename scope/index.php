<?php
$title = "scope";

$greeting = 'hello, world';

$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']
];

$guitar_name = array_column($guitars, 'name');

function pluck($arr, $key)
{
    $results = array_map(function ($item) use ($key) {
        return $item[$key];
    }, $arr);

    return $results;
}

$guitar_names = pluck($guitars, 'name');

function sum($a, $b)
{
    global $greeting;
    echo $greeting;

    return $a + $b;
}

function output($value = ["empty"])
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
$result = sum(1, 5);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5"></h1>
            </div>
        </div>
        <div class="row">
            <?= $result; ?>
            <?php output($guitar_name) ?>
        </div>
    </div>
</body>

</html>
<?php
$title = "includes";
include("./../includes/header.php");

require_once("./../includes/functions.php");

$greeting = 'hello, world';

$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']
];

$guitar_names = pluck($guitars, 'name');

$result = sum(1, 5);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <?= $result; ?>
        <?php output($guitar_names) ?>
    </div>
</div>


<?php include("./../includes/footer.php"); ?>
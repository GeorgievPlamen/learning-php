<?php

// traditional array
$guitars1 = ["Vela", "Explorer", "Strat"];

print_r($guitars1);

echo $guitars1[2];

if (isset($guitars1[3])) {
    echo $guitars1[3];
} else {
    echo "Guitar does not exist";
}

$velaGuitar = 'Vela';
$explorerGuitar = 'Explorer';
$stratGuitar = 'Strat';

// associative array or hashmap
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat'
];

echo $guitars2['prs'];

<?php
require('functions.php');
$title = 'hello, world';

$view_bag = [];

$view_bag['title'] = 'Hello, World Title';

view('index', $title);

<?php
require('app/app.php');

$data = get_data();

// $view_bag = [];

// $view_bag['title'] = 'Hello, World Title';

view('index', $data);

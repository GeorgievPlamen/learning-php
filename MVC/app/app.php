<?php

define('APP_NAME', dirname(__FILE__) . '/../');

require('functions.php');
require('config.php');
require('data/FileDataProvider.class.php');
require('data/Data.class.php');

Data::initialize(new FileDataProdiver([CONFIG['data_file']]));

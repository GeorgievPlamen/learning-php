<?php
session_start();
require_once("../includes/config.php");
require_once("../includes/functions.php");

ensure_user_is_authenticated();

echo $_SESSION['email'];

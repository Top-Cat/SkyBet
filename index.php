<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "controllers/basecontroller.php";

spl_autoload_register(function ($class) {
	include 'models/' . $class . '.php';
});

$page = "index";
include "controllers/{$page}.php";
new $page();

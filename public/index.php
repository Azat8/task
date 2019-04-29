<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
// // error_reporting(0);
// // @ini_set('display_errors', 0);
//print_r(phpinfo());die;
include ('../autoload.php');
global_connection('mysql');

include '../routes/web.php';

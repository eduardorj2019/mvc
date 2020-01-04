<?php 
include_once '../config/config.inc.php';
include_once '../vendor/autoload.php';
include_once '../routes/Route.php';

use \app\App;

$run = new App;
$run->boot();

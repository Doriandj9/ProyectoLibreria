<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once ('Controllers/Router.php');
require_once ('Controllers/ViewController.php');
require_once ('config.php');
$op= isset($_GET['op']) ? $_GET['op']: 'index';

$enrutador = new Router($op);



?>
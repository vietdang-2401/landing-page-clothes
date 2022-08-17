<?php


$path_project = 'landing-page-clothes';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

require_once ROOT . DS . 'controllers' . DS . 'RouteController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';
// require_once('../controllers/RouteController.php');
$route = new RouteController($url);
$route->show();
?>
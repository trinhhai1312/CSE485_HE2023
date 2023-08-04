<?php
require_once "../app/config/config.php";
$route = isset($_GET['route']) ? $_GET['route'] : 'employee';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($route);
$controller = $controller . "Controller";
$controllerPath = '/app/controllers/' . $controller . '.php';
require_once(APP_ROOT . $controllerPath);
$objController = new $controller();
$objController->$action();
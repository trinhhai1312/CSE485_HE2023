<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'controllers/EmployeeController.php';
$controller = new EmployeeController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list';
}

switch ($action) {
    case 'list':
        $controller->listEmployees();
        break;
    case 'add':
        $controller->addEmployee();
        break;
    case 'edit':
        $controller->editEmployee();
        break;
    case 'save':
        $controller->saveEmployee();
        break;
    case 'delete':
        $controller->deleteEmployee();
        break;
    default:
        $controller->listEmployees();
        break;
}
?>

<?php
require_once APP_ROOT . "/app/services/EmployeeService.php";

class EmployeeController{
    public function index()
    {
        $datas = EmployeeService::getAll();//Sửa
        include APP_ROOT . "/app/views/employee/index.php";
    }

    public function create(){
        include APP_ROOT . "/app/views/employee/create.php";
    }

    public function store()
    {
        if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            EmployeeService::create($name, $address, $salary);
            header('Location:' . DOMAIN . "/public/index.php");
        }

    }

    public function edit(){
        $id = $_GET['id'];
        $employee = EmployeeService::findById($id);
        include APP_ROOT . "/app/views/employee/edit.php";
    }

    public function update()
    {
        if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            EmployeeService::edit($id ,$name, $address, $salary);
            header('Location:' . DOMAIN . "/public/index.php");
        }
        else {
            echo "thieu du lieu";
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            EmployeeService::delete($id);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }
}


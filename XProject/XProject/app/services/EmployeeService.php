<?php
require_once APP_ROOT . "/app/models/Employee.php";
require_once APP_ROOT . "/app/libs/DBConnect.php";
class EmployeeService
{
    public static function getAll()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * from employees order by id desc "; //Sửa
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $employees = [];//Sửa
        while ($row = $stmt->fetch()) {
            $employee = new Employee($row['id'],$row['name'],$row['address'],$row['salary']); //Sửa
            $employees[] = $employee;//Sửa
        }
        return $employees;//Sửa
    }

    public static function create($name, $address, $salary)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $address, $salary]);
    }

    public static function findById($id)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from employees where id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        $employee = new Employee($data['id'],$data['name'],$data['address'],$data['salary']);
        return $employee;
    }

    public static function edit($id,$name, $address, $salary)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "UPDATE employees SET name=?, address=?, salary=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $address, $salary,$id]);
    }


    public static function delete($id)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "delete from employees where id = ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id]);
    }

}
<?php
require_once 'models/Employee.php';
class EmployeeController
{
    public function listEmployees()
    {
        // Retrieve a list of employees from the database
        $db = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
        $query = "SELECT * FROM employees";
        $stmt = $db->query($query);
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Pass the employee list to the view (views/list_employees.php)
        include dirname(__FILE__) . '/../views/list_employees.php';
    }

    public function addEmployee()
    {
        // Show the form to add a new employee (views/add_employee.php)
        include dirname(__FILE__) . '/../views/add_employee.php';
    }

    public function editEmployee()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Retrieve the employee details by ID from the database
            $db = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
            $query = "SELECT * FROM employees WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(['id' => $id]);
            $employee = $stmt->fetch(PDO::FETCH_ASSOC);

            // Show the edit form with the retrieved employee data (views/edit_employee.php)
            include dirname(__FILE__) . '/../views/edit_employee.php';
        } else {
            // If no ID is provided, redirect back to the list page
            header('Location: index.php?action=list');
        }
    }

    public function saveEmployee()
    {
        // Check if form data is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];

            // Create a new Employee object with form data
            $employee = new Employee($name, $address, $salary);

            // Check if an ID is provided for editing an existing employee
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $employee->id = $id;
                // Update the existing employee
                $employee->update();
            } else {
                // Save the new employee to the database
                $employee->save();
            }
        }

        // Redirect back to the list page (index.php?action=list)
        header('Location: index.php?action=list');
    }

    public function deleteEmployee()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Delete the employee by ID from the database
            Employee::deleteById($id);
        }
        // Redirect back to the list page (index.php?action=list)
        header('Location: index.php?action=list');
    }
}
?>

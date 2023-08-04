<?php
class Employee
{
    private $id;
    private $name;
    private $address;
    private $salary;

    public function __construct($name, $address, $salary, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
    }

    // Getters and Setters

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    // Other database-related methods like save, update, delete

    // Assuming you have a database connection, here's a sample save method:
    public function save()
    {
        $db = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
        $query = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'name' => $this->name,
            'address' => $this->address,
            'salary' => $this->salary
        ]);
    }

    // Sample method for updating an existing employee
    public function update()
    {
        $db = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
        $query = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'salary' => $this->salary
        ]);
    }

    // Sample method for deleting an employee by ID
    public static function deleteById($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
        $query = "DELETE FROM employees WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action="index.php?action=save" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Address:</label>
        <input type="text" name="address" required>
        <br>
        <label>Salary:</label>
        <input type="number" name="salary" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="index.php?action=save" method="post">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $employee['name']; ?>" required>
        <br>
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $employee['address']; ?>" required>
        <br>
        <label>Salary:</label>
        <input type="number" name="salary" value="<?php echo $employee['salary']; ?>" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>

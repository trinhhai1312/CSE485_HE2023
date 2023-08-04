<!DOCTYPE html>
<html>
<head>
    <title>List of Employees</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">List of Employees</h1>
        <p><a class="btn btn-success" href="index.php?action=add">Add New Employee</a></p>
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['name']; ?></td>
                    <td><?php echo $employee['address']; ?></td>
                    <td>$<?php echo number_format($employee['salary'], 2); ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="index.php?action=edit&id=<?php echo $employee['id']; ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="index.php?action=delete&id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

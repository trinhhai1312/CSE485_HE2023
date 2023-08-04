<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index</title>
</head>
<body>
<div class="container mt-3">
    <div class="d-flex " style="justify-content: space-between;align-items: center">
        <h4>List Employees</h4>
        <a href="<?php echo DOMAIN . "/public/index.php?action=create" ?>" class="btn btn-info">Create new Employee</a>

    </div>
    <table class="table">
        <thead>
        <!--        table row-->
        <tr>
            <!--            table heading-->
<!--            băt đầu Phần sửa-->
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Action</th>
<!--            Đến đây-->
        </tr>
        </thead>
        <tbody>
        <?php $index = 1;
        foreach ($datas as $data) { ?>
            <!--            băt đầu Phần sửa-->

            <tr>
                <th><?php echo $index ?></th>
                <td><?php echo $data->getName() ?></td>
                <td><?php echo $data->getAddress() ?></td>
                <td><?php echo $data->getSalary() ?></td>
                <td class="d-flex gap-2">
                    <a href="<?php echo DOMAIN . '/public/index.php?action=edit&id='.$data->getId() ?>"
                            class="btn btn-warning">Edit</a>
                    <form action="<?php echo DOMAIN . '/public/index.php?action=delete'?>"
                          method="post">
                        <input hidden name="id" type="text" value="<?php echo $data->getId() ?>"/>
                        <button class="btn btn-danger" onclick="confirm('Do you want to delete')">Delete</button>
                    </form>
                </td>
            </tr>
            <!--            Đến đây-->

            <?php $index++;
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>

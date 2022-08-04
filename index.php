<?php
session_start();
require_once("config/db.php");
if (!isset($_SESSION['admin'])) {
    header('location: auth/login.php');
    exit();
}

if (isset($_SESSION['create'])) {
    echo "student created successfully";
    unset($_SESSION['create']);
}

if (isset($_SESSION['update'])) {
    echo "student updated successfully";
    unset($_SESSION['update']);
}

if (isset($_SESSION['delete'])) {
    echo "student deleted successfully";
    unset($_SESSION['delete']);
}
$statement = $conn->query("SELECT * FROM students");
$result = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Management System</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center py-5">Student Management System</h1>
        <div class="float-end">
            <a href="crud/add_form.php" class="btn btn-primary">Add Students</a>
            <a href="auth/logout.php" class="btn btn-secondary">Logout</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1;
                foreach ($result as $student) { ?>
                    <tr>
                        <td><?= $number++ ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['age'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['phone'] ?></td>
                        <td>
                            <a href="crud/edit_form.php/?id=<?= $student['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="crud/delete.php/?id=<?= $student['id'] ?>" class="btn btn-danger btn-sm" onclick="alert('Are you sure want to delete!')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
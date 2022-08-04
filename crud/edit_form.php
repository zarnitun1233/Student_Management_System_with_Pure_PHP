<?php
session_start();
require_once("../config/db.php");
$id = htmlspecialchars($_GET['id']);
$statement = $conn->query("SELECT * FROM students WHERE id=$id");
$result = $statement->fetchAll();
foreach ($result as $students) {
    $student = $students;
}
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
        <h1 class="text-center py-5">Edit Students</h1>
        <form action="../update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" value="<?= $student['name'] ?>" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" id="age" name="age" value="<?= $student['age'] ?>" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" value="<?= $student['email'] ?>" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" id="phone" name="phone" value="<?= $student['phone'] ?>" class="form-control" required autofocus>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Edit">
            <a href="../../index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>
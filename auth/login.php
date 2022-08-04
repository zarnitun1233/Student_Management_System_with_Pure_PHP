<?php
session_start();
require_once("../config/db.php");
$statement = $conn->query("SELECT * FROM admins");
$result = $statement->fetchAll();
foreach ($result as $info) {
    $admin = $info;
}
if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if ($email) {
        if ($password) {
            if ($admin['email'] === $email and $admin['password'] === $password) {
                $_SESSION['admin'] = "admin";
                header("location: ../index.php");
                die();
            }
        } else {
            echo "Please enter password";
        }
    } else {
        echo "Please enter email";
    }
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
        <h1 class="text-center py-5">Login Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required autofocus>
            </div>
            <input type="submit" value="login" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
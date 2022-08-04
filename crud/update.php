<?php
session_start();
require_once("../config/db.php");
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
if (isset($name) and isset($age) and isset($email) and isset($phone)) {
  $sql = "UPDATE students SET name=:name, age=:age, email=:email, phone=:phone";
  $statement = $conn->prepare($sql);
  $statement->execute([
    ':name' => $name,
    ':age' => $age,
    ':email' => $email,
    ':phone' => $phone,
  ]);
  $_SESSION['update'] = "update";
  header("location: ../index.php");
} else {
  echo "Please fill full information of students";
  exit();
}

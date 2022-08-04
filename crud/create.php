<?php
session_start();
require_once("../config/db.php");
date_default_timezone_set("Asia/Yangon");
$date = date('Y-m-d H:i:s');
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
if (isset($name) and isset($age) and isset($email) and isset($phone)) {
  $sql = "INSERT INTO students (name, age, email, phone, created_at, updated_at)
VALUES (:name, :age, :email, :phone, :created_at, :updated_at)";
  $statement = $conn->prepare($sql);
  $statement->execute([
    ':name' => $name,
    ':age' => $age,
    ':email' => $email,
    ':phone' => $phone,
    ':created_at' => $date,
    ':updated_at' => $date
  ]);
  $_SESSION['create'] = "create";
  header("location: ../index.php");
} else {
  echo "Please enter full information of students";
  exit();
}

<?php
session_start();
require_once("../config/db.php");
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";
$statement = $conn->prepare($sql);
$statement->execute();
$_SESSION['delete'] = "delete";
header("location: ../../index.php");

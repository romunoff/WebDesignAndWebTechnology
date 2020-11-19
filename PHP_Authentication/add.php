<?php
session_start();
require_once("db.php");
//$query = "INSERT INTO 'users' (first_name, last_name, password, login, id_roles) VALUES ('$_POST['name']', '$_POST['surname']', '$_POST['password']', '$_POST['login']', '1')";
$query = "INSERT INTO `users`(`first_name`, `last_name`, `password`, `login`, `id_role`) VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['password']}','{$_POST['login']}', '1')";
mysqli_query($conn, $query);
header('Location: login.php');
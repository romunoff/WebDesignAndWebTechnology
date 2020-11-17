<?php 
session_start(); 
$login = 'admin';
$password = '1111';

$_SESSION['auth'] = false;

if ($_POST['submit']) {
    if ($login == $_POST['login'] && $password == $_POST['pass']) {
        $_SESSION['auth'] = true;
    }
}
header('Location: restricted.php');
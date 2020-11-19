<?php 
session_start(); 

require_once("db.php");

/*$login = 'admin';
$password = '1111';*/

$_SESSION['auth'] = false;

if (count($_POST) > 0) {
    $res = mysqli_query($conn, 'SELECT `login`, `password` FROM `users`');
    while($row = mysqli_fetch_array($res)){
        if ($row['login'] == $_POST['login'] && $row['password'] == $_POST['pass']) {
            $_SESSION['auth'] = true;
            break;
        }  
    }
}
header('Location: restricted.php');
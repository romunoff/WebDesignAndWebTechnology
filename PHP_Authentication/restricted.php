<?php
session_start();

if ($_SESSION['auth']) {
    echo "Вы успешно авторизовались.<br>";
}
else echo "Неверный логин или пароль. <a href='login.php'>Попробуйте еще раз.</a>";
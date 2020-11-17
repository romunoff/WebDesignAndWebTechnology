<?php session_start(); ?>
<html>
<body>
    <form name="auth" action="./auth.php" method="POST">
        <p><input type="text" name="login" placeholder="Логин"/></p>
        <p><input type="password" name="pass" placeholder="Пароль" /></p>
        <p><input type="submit" name="submit" value="Войти" /></p>
    </form>
</body>
</html>
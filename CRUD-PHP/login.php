<?php require "db.php"; ?>

<?php
    if(isset($_POST['signin'])) {
        $result = $mysqli->query("SELECT `first_name`, `password` FROM `users`") or die(mysqli_error($mysqli));
        if ($row = $result->fetch_assoc()) {
            if ($row['first_name'] == $_POST['first_name'] && $row['password'] == $_POST['password']) {
                $_SESSION['logged_user'] = $row['first_name'];
                echo "<a href='index.php'>Успех</a>";
            }
            else echo "<div style='color: green;'>Пароль неверный</div><hr>";
        }

    }
?>

<form action="login.php" method="POST">
    <p>
        <input type="text" name="first_name" placeholder="First Name" value="<?php echo @$_POST['first_name']; ?>">
    </p>

     <p>
         <input type="password" name="password" placeholder="Password" value="<?php echo @$_POST['password']; ?>"> 
    </p>

    <p>
        <button type="submit" name="signin">Sign In</button>
    </p>

</form>
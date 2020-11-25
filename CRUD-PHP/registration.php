<html>

    <head>
        <title></title>
    </head>

    <body>
        
        <?php require "db.php"; ?>

        <?php 
            if(isset($_POST['signup'])) {
                if(trim($_POST['first_name']) == '') {
                    $errors[] = "Enter first name!";
                }
                if(trim($_POST['last_name']) == '') {
                    $errors[] = "Enter last name!";
                }
                if($_POST['password'] == '') {
                    $errors[] = "Enter password!";
                }
                if($_POST['repeat_password'] != $_POST['password']) {
                    $errors[] = "Repeated password isn't valid!";
                }

                if(empty($errors)) {
                    $mysqli->query("INSERT INTO users (first_name, last_name, password, role_id) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['password']}', '2')") or die($mysqli->error);
                    echo "<div style='color: green;'>Successful</div><hr>";
                } else {
                    echo "<div style='color: red;'>".array_shift($errors)."</div><hr>";
                }
            }
        ?>

        <form action="registration.php" method="POST">
            <p>
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo @$_POST['first_name']; ?>">
            </p>

            <p>
                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo @$_POST['last_name']; ?>">
            </p>

            <p>
                <input type="password" name="password" placeholder="Password" value="<?php echo @$_POST['password']; ?>"> 
            </p>

            <p>
                <input type="password" name="repeat_password" placeholder="Repeat Password" value="<?php echo @$_POST['repeat_password']; ?>">
            </p>

            <p>
                <button type="submit" name="signup">Sign Up</button>
            </p>

        </form>
    
    </body>

</html>
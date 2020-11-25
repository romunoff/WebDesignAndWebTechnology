<?php

    if (isset($_POST['signIn'])) {
        $res = mysqli_query($connection, 'SELECT `email`, `password` FROM `users`');
        while($row = mysqli_fetch_array($res)){
            if ($row['email'] == $_POST['email'] && $row['password'] == $_POST['password']) {
                $_SESSION['authorized'] = true;
                break;
            }  
        }
        header('Location: refresh 0');
    }
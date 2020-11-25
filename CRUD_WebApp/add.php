<?php
    session_start();
    require_once("connection.php");

    $query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `role_id`) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['role']}')";
    mysqli_query($connection, $query);
    header('Location: index.php');

    /*$directory = "public/images/";
    $file = $directory.basename($_FILES["file"]["name"]);
    $uploadOk = true;
    $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - ".$check["mime"].".";
            $uploadOk = true;
        } else {
            echo "File is not an image.";
            $uploadOk = false;
        }
    }

    if (file_exists($file)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }

    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk == false) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }*/

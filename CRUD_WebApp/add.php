<?php
    session_start();
    require_once("connection.php");

    $directory = "public/images/";
    $file = $directory.basename($_FILES["file"]["name"]);
    $uploadOk = true;
    $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = true;
        } else {
            echo "File is not an image.";
            $uploadOk = false;
        }
    }
    // Check if file already exists
    if (file_exists($file)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }
    // Allow certain file formats
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
    && $fileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = false;
    }
    // Check if $uploadOk is set to false by an error
    if ($uploadOk == false) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



    $query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `photo`, `role_id`) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_FILES['file']['name']}', '{$_POST['role']}')";
    mysqli_query($connection, $query);
    header('Location: index.php');
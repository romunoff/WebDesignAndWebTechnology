<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die($connection->connect_error);
    }
?>
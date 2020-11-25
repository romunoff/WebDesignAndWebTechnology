<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "crud") or die($mysqli->error);
<?php
session_start();
require_once("db.php");

echo "<table border=1 style='text-align: center;'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Login</th><th>Portrait</th></tr>";
$res = mysqli_query($conn, 'SELECT * FROM `users`');
while($row = mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['login']."</td>";
    echo "<td>"."<img style='width: 50px;' src = 'public/images/".$row['img']."'></td>";
    echo "</tr>";
}
echo "</table>";
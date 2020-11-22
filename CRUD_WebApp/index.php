<?php
    session_start();
    require_once("connection.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <button type="button" class="btn btn-primary">Sign IN</button>
        <button type="button" class="btn btn-primary" onClick="location.href='registration.php'">Sign UP</button>
        <table>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Role</th>
            </tr>

            <?php 
                $result = mysqli_query($connection, "SELECT user.id, user.first_name, user.last_name, user.email, user.photo, role.title AS title FROM users user JOIN roles role ON user.role_id = role.id");
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['first_name']."</td>";
                    echo "<td>".$row['last_name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>"."<img style='width: 50px;' src = 'public/images/".$row['photo']."'></td>";
                    echo "<td>".$row['title']."</td>";
                    echo "</tr>";
            
                }
            ?>

        </table>
    </body>
</html>
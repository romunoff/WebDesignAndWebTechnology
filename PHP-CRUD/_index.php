<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php require_once("process.php"); ?>

        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        </div>
        <?php endif; ?>

        <div class="container">

            <?php
                $mysqli = new mysqli('localhost', 'root', '', 'test') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));
            ?>

            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>

                    <?php while($row = $result->fetch_assoc()): ?>

                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td>
                                <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                                <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php endwhile; ?>
                </table>
            </div>




            <div class="row justify-content-center">
                <form action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Enter your location">
                    </div>
                    <div class="form-group">
                    <?php if ($update == true): ?>
                        <button type="submit" name="update" class="btn btn-info">Update</button>
                    <?php else: ?>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                    <?php endif; ?>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>
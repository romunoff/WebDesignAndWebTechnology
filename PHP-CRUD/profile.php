<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php require "process.php"; ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-auto">

                    <form action="process.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="row justify-content-center">

                            <div class="col-md-auto picture-size">
                                <div class="card">
                                    <img src="assets/img/<?php if($photo == '') echo 'noimage.png'; else echo $photo; ?>" class="card-img">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="photo" type="file">
                                </div>
                            </div>
    
                            <div class="col-md-auto">

                                <div class="form-group">
                                    <input class="form-control" type="text" name="first_name" value="<?php echo $first_name; ?>">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" name="last_name" value="<?php echo $last_name; ?>">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" value="<?php echo $role; ?>">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" value="<?php echo $password; ?>">
                                </div>

                                <?php if($update == true): ?>
                                    <div class="form-group">
                                        <button type="submit" name="update" class="btn btn-info btn-block">Update</button>
                                    </div>
                                <?php else: ?>
                                    <?php if(isset($_SESSION['role'])): ?>
                                        <?php if($_SESSION['role'] == 1 || $_SESSION['username'] == $first_name): ?>
                                            <div class="form-group">
                                                <button type="button" id="edit" class="btn btn-primary btn-block" onClick="location.href='profile.php?id=<?php echo $id; ?>&&edit=<?php echo $id; ?>'">Edit</button>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($_SESSION['role'] == 1): ?>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger btn-block">Delete</button>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                <?php endif; ?>
    
                            </div>
 
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </body>
</html>
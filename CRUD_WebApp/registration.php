<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>

        <div class="container-fluid vertical-align">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-2">

                    <form class="form-container" method="POST" action="add.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <select class="custom-select" name="role">
                                <option selected disabled>Select a role</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="repeatPassword" placeholder="Repeat Password">
                        </div>

                        <div>
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign UP" />
                        </div>

                    </form>

                </div>
            </div>
        </div>



        

    </body>
</html>

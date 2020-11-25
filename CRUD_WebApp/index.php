<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php session_start(); require_once("process.php"); ?>
        <?php $connection = new mysqli("localhost", "root", "", "crud") or die ($mysqli_error($mysqli)); ?>
        <div class="container-fluid vertical-align">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">

                    <div class="float-right">
                        <?php if(isset($_POST['signIn'])) {
                            echo " = true";
                        }
                        else {
                            echo " = false";
                        } ?>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal'>Sign IN</button>
              
                        <span class=""> | </span>
                        <button type="button" class="btn btn-primary" onClick="location.href='registration.php'">Sign UP</button>
                    </div>

                    <div>
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>

                                <?php 
                                    $result = mysqli_query($connection, "SELECT user.id, user.first_name, user.last_name, user.email, role.title AS title FROM users user JOIN roles role ON user.role_id = role.id");
                                    while($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<th scope='row'><a href='profile.php?user_id=".$row['id']."'>".$row['id']."</a></th>";
                                        echo "<td>".$row['first_name']."</td>";
                                        echo "<td>".$row['last_name']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['title']."</td>";
                                        echo "</tr>";
                                    }
                                ?>

                        </table>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="labelModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="labelModal">Sign IN</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPassword" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword" name="password">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                           <input type="submit" name="signIn" class="btn btn-primary" value="Sign IN" />
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>

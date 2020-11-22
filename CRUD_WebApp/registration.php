<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method = "POST" action = "add.php"  enctype="multipart/form-data">
            <div>
                <input type = "text" name = "first_name" placeholder = "First Name" />
            </div>

            <div>
                <input type = "text" name = "last_name" placeholder = "Last Name" />
            </div>

            <div>
                <input type = "file" name = "file" />
            </div>

            <div>
                <select name = "role">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>

            <div>
                <input type = "text" name = "email" placeholder = "Email" />
            </div>

            <div>
                <input type = "password" name = "password" placeholder = "Password" />
            </div>

            <div>
                <input type = "password" name = "repeatPassword" placeholder = "Repeat Password" />
            </div>

            <div>
                <input type = "submit" name = "submit" value = "Sign UP" />
            </div>

        </form>
    </body>
</html>
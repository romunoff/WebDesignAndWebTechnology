<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>РЕГИСТРААЦИЯ</p>
    <p><input type="text" name="name" placeholder="Введите имя"/></p>
    <p><input type="text" name="surname" placeholder="Введите фамилию"/></p>
    <p><input type="text" name="login" placeholder="Введите логин"/></p>
    <p><input type="password" name="password" placeholder="Введите пароль"/></p>
    <p>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </p>
    <p><input type="submit" name="submit" value="Зарегестрироваться" /></p>
</form>
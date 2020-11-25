<?php require "db.php"; ?>

<?php if(isset($_SESSION['logged_user'])): ?>
Авторизован! <?php echo $_SESSION['logged_user']; ?>
<a href="logout.php">Sign oUT</a>
<?php else: ?>
    <a href="login.php">Sign IN</a>
    <a href="registration.php">Sign UP</a>
<?php endif; ?>

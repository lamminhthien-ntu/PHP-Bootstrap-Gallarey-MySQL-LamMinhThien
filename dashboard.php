<!--Connect MySQL Database -->
<?php include('connect_mysql.php') ?>
<!--Bootstrap CDN -->
<?php include('bootstrap_cdn.php') ?>
<?php
// Check user login or not
if (isset($_SESSION['uname'])) {
    header('Location: dashboard.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>

<head></head>

<body>
    <h1>Dashboard</h1>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
</body>

</html>
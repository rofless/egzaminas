<?php
include('funkcijos.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location:login.php');
}
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<div class="header">
    <h2><center>Home page</center></h2>
</div>
<center><div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="alert sucess">
        <h3>
            <?php
            echo $_SESSION['success'];
            ?>
        </h3>
    </div>
    <?php endif ?>
    <?php if (isset($_SESSION['user'])) : ?>
    <strong><?php echo $_SESSION['user']['username']; ?></strong>

    <small>
        <i style="..."><?php echo ucfirst($_SESSION['user']); ?></i>
        <br>
        <a href="index.php?logout='1'" style="...">Logout</a>
    </small>
    <?php endif ?>
</div>
</center>
</body>
</html>
</head>
</html>

<?php
include('funkcijos.php')
?>
<html>
<head>
    <title>PUSLAPIS</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="container">
    <div class="form-group">
        <form method="POST" action="login.php">
            <?php echo display_error(); ?>
        <label for="username">Username</label>
        <input name="username" type="text" placeholder="" class="form-control" id="username" placeholder="Your username" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="" class="form-control" id="password" placeholder="Your email address" />
    </div>

    <button name="login_btn" type="submit" class="btn btn-block btn-danger btn-lg">LOGIN</button>
    <center>
        <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
    </center>
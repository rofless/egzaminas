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
    <center><H1>REGISTER</H1></center>
    <div class="form-group">
        <form method="POST" action="register.php">
            <?php echo display_error(); ?>
            <label for="username">Username</label>
            <input name="username" type="text" placeholder="" class="form-control" id="username" placeholder="Your username" value="<?php echo $username; ?>"/>
    </div>
    <div class="form-group">
        <label for="password">Email</label>
        <input name="email" type="email" placeholder="" class="form-control" id="email" placeholder="Your email address" value="<?php echo $email; ?>" />
    </div>
    <div class="form-group">
        <label for="password_1">Password</label>
        <input name="password_1" type="password" placeholder="" class="form-control" id="password_1" placeholder="Your password" />
    </div>
    <div class="form-group">
        <label for="password_2">Password confirmation</label>
        <input name="password_2" type="password" placeholder="" class="form-control" id="password_2" placeholder="Your password" />
    </div>

    <button name="register_btn" type="submit" class="btn btn-block btn-danger btn-lg">Register</button>
<center>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
</center>



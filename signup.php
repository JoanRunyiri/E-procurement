<?php
include('server.php');


 ?>
<!--    <form class="form" action="" method="post">-->
<!--        <h1 class="login-title">Registration</h1>-->
<!--        <input type="text" class="login-input" name="username" placeholder="Username" required />-->
<!--        <input type="text" class="login-input" name="email" placeholder="Email Adress">-->
<!--        <input type="password" class="login-input" name="password" placeholder="Password">-->
<!--        <input type="submit" name="submit" value="Register" class="login-button">-->
<!--        <p class="link"><a href="login.php">Click to Login</a></p>-->
<!--    </form>-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<style>
    body{
        background-image: url("officebg.jpg");
        background-size: cover;
    }
    .form{
        font-weight: bold;
    }
    h2{
        font-weight: bold;
        text-align: center;
    }
</style>
<body>
<form action="signup.php" method="post">
    <h2>Sign Up</h2><br><br>
    <?php include ('errors.php')?>

    <div class="form">

            <label style="font-family: Tahoma" for="First Name">First Name</label>
            <input type="text" name="fname" id="fname" required>

            <label style="font-family: Tahoma" for="Middle Name">Middle Name</label>
            <input type="text" name="mname" id="mname" required >

            <label style="font-family: Tahoma" for="Last Name">Last Name</label>
            <input type="text" name="lname" id="lname" required><br><br><br>
    <label style="font-family: Tahoma" for="Name of Company">Name of Company</label>
    <input type="text" name="nameofcompany" id="nameofcompany" required ><br><br><br>
    <label style="font-family: Tahoma" for="Email">Email Address</label>
    <input type="email" name="email" id="email" required><br><br><br>
    <label style="font-family: Tahoma" for="Password">Password</label>
    <input type="password" name="password_1" id="password_1" required ><br><br><br>
    <label style="font-family: Tahoma" for="Confirm Password">Confirm Password</label>
    <input type="password" name="password_2" id="password_2" required><br><br><br>
    <button type="submit"  name="reg_user">Register</button>
    <p>
        Already a member? <a href="index.php">Sign in</a>
    </p>
</div>
</form>

</body>
</html>

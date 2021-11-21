<?php
include('server.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
</head>
<style>
    /*.form {*/
    /*    max-width: 700px;*/
    /*    margin: 0 auto;*/
    /*    border: 0px solid #f2f2f2;*/
    /*    padding: 0px;*/

    /*}*/

    /*h2 {*/
    /*    text-transform: uppercase;*/
    /*    margin: 10px 10px;*/
    /*    padding: 0;*/
    /*    text-align: center;*/

    /*}*/

    /*input[type="text"]{*/
    /*    width: 90%;*/
    /*    padding: 10px;*/
    /*    font-size: 16px;*/
    /*    margin: 3px 0;*/
    /*    border: 1px solid #ccc;*/
    /*}*/

    /*button[type="submit"] {*/
    /*    text-align: center;*/
    /*    margin-left: 90px;*/
    /*    margin-top: 5px;*/
    /*    padding: 6px 190px;*/
    /*    font-size: 16px;*/
    /*    cursor: pointer;*/
    /*    background-color: #274e75;*/
    /*    color: #FFF;*/
    /*    outline: none;*/
    /*    border: 1px solid rgba(0, 0, 0, .1);*/

    /*}*/

    /*.logo{*/
    /*    pa*/

    /*}*/
    body{
        margin: 0;
        padding: 0;
        background: #fff;

        color: #fff;
        font-family: Arial;
        font-size: 12px;
    }

    .body{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url(officebg.jpg);
        background-size: cover;
        -webkit-filter: blur(5px);
        z-index: 0;
    }

    .grad{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header{
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 255px);
        z-index: 2;
    }

    .header div{
        float: left;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 200;
    }

    .header div span{
        color: #5379fa !important;
    }

    .form{
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 50px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .form input[type=text]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
    }

    .form input[type=password]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .form input[type=button]{
        width: 260px;
        height: 35px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 10px;
    }

    .form input[type=button]:hover{
        opacity: 0.8;
    }

    .form input[type=button]:active{
        opacity: 0.6;
    }

    .form input[type=text]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .form input[type=password]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .form input[type=button]:focus{
        outline: none;
    }

    ::-webkit-input-placeholder{
        color: rgba(255,255,255,0.6);
    }

    ::-moz-input-placeholder{
        color: rgba(255,255,255,0.6);
    }

</style>
<body>
<form action="employee_login.php" method="post">
        <div class="body"></div>

        <div class="grad"></div>
    <div class="header">
        <div><span>EPMS</span></div>
    </div>
    <br>
<!--        <a class="logo" href="index.php"><img src="assets/img/logo.png" alt="..." width="700px" height="200px" /></a>-->

<!--        <h2>Sign In</h2>-->
    <div class="form">

    <label for="Supplier ID">Supplier Email</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="Supplier Password">Password</label>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit" name="login_employee">Login</button><br><br>

    </div>

</form>






</body>
</html>

<?php
session_start();

$conn = require('conn.php');

//Register users section
if (isset($_POST['reg_user'])) {
    //Initialise variables
    $fname = "";
    $mname = "";
    $lname = "";
    $name_of_company = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";



// Check connection
    if ($conn) {
        echo "success";
        //populate variables
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $name_of_company = mysqli_real_escape_string($conn, $_POST['nameofcompany']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

//handle sign in logic
        if ($password_1 != $password_2) {
            array_push($errors, "Passwords do not match");
        }

//check database for existing user
//we'll use email to check
        $user_check_query = /** @lang text */
            "SELECT * FROM supplier_sign_up WHERE email='$email' LIMIT 1";

        $result = mysqli_query($conn, $user_check_query) or die(mysqli_error($conn));
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }

        }

//Register users
        if (count($errors) == 0) {
            $password = md5($password_1); //this encrypts the password
            $query =
                "INSERT INTO supplier_sign_up
    (first_name, 
    second_name,
     third_name,
     company_name, 
     email, 
     password_1) VALUES ('$fname','$mname','$lname','$name_of_company','$email','$password')";

            mysqli_query($conn, $query); //runs query on database

            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";

            //redirect user
    header('Location:supplier_home_page.php');
        }

    } //in case connection does not work
    else {

        die("Connection failed: " . mysqli_connect_error());
    }
}
//LOGIN USER
if(isset($_POST['login_user'])) {
    if ($conn){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (empty($email)) {
        array_push($errors, "email is required");

    }
    if (empty($password)) {
        array_push($errors, "password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM supplier_sign_up WHERE email='$email' AND password_1='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['email'] = $email;
//            $_SESSION['role'] = $role;

            $_SESSION['success'] = "logged in successfully";
        header('Location: supplier_home_page.php');
        } else {
            echo 'Wrong Password';
            array_push($errors, "Wrong username or password. Please try again");
        }
    }
    } //in case connection does not work
    else {

        die("Connection failed: " . mysqli_connect_error());
    }
}

//login employee
if(isset($_POST['login_employee'])) {
    if ($conn){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if (empty($email)) {
            array_push($errors, "email is required");

        }
        if (empty($password)) {
            array_push($errors, "password is required");
        }
        if (count($errors) == 0) {
//            $password = md5($password);
            $query = "SELECT * FROM employees WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $user = mysqli_fetch_assoc($result);
            if ($user) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                $_SESSION['role'] = $user['role'];
                $_SESSION['success'] = "logged in successfully";
        header('Location: staff_dashboard.php');
            } else {
                echo 'Wrong Password';
                array_push($errors, "Wrong username or password. Please try again");
            }
        }
    } //in case connection does not work
    else {

        die("Connection failed: " . mysqli_connect_error());
    }
}

<?php
//database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "itender";
$errors = array();


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
return $conn;
?>

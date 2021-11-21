<?php
session_start();

$conn = require('conn.php');
// Check connection
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

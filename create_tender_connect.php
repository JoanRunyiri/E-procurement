<?php

session_start();

$conn = require('conn.php');

//Initialise variables
$procurement_id = "";
$item_name = "";
$quantity = "";
$tender_description = "";
$open_date = "";
$close_date = "";
$bid_doc = "";


//insert tender data
if (isset($_POST['create_tender'])) {
// Check connection
    if ($conn) {
        echo "success";
        //populate variables
        $procurement_id = mysqli_real_escape_string($conn, $_POST['procurement_id']);
        $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
        $tender_description = mysqli_real_escape_string($conn, $_POST['tender_description']);
        $open_date = mysqli_real_escape_string($conn, $_POST['open_date']);
        $close_date = mysqli_real_escape_string($conn, $_POST['close_date']);
        $bid_doc = mysqli_real_escape_string($conn, $_POST['bid_doc']);


//    //check database for existing application
////we'll use company name to check
//    $user_check_query =
//        "SELECT * FROM supplier_sign_up WHERE company_name='$company_name' LIMIT 1";
//
//    $result = mysqli_query($conn, $user_check_query) or die(mysqli_error($conn));
//    $user = mysqli_fetch_assoc($result);
//
//    if ($user) {
//        if ($user['email'] === $company_name) {
//            array_push($errors, "Company already exists in application records");
//        }
//
//    }


//Inserting data

        if (count($errors) == 0) {
            $query = "INSERT INTO create_tender
    (procurement_id, item_name, quantity, tender_description, opening_date, closing_date, tender_document) VALUES
         ('$procurement_id',
         '$item_name',
         '$quantity',
         '$tender_description',
         '$open_date',
         '$close_date',
         '$bid_doc')";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            echo $result;
            if ($result == 1) {
                //redirect user
                echo "successfully submitted";
                header('Location:staff_dashboard.php');
            } else {
                echo "submit again";
            }

//
        } //in case connection does not work
        else {

            die("Connection failed: " . mysqli_connect_error());


        }

    }
}


?>

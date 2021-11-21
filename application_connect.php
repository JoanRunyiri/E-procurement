<?php
session_start();

$conn = require('conn.php');

//Initialise variables
$first_name = "";
$middle_name = "";
$last_name = "";
$company_name = "";
$kra_pin = "";
$compliance_certificate = "";
$company_permit = "";
$cert_incorporation = "";
$audited_financial_statement = "";
$price_per_unit = "";
$total_quote = "";
$delivery_period = "";
//insert supplier application data
if (isset($_POST['apply_supplier'])) {
// Check connection
if ($conn) {
    echo "success";
    //populate variables
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
    $kra_pin = mysqli_real_escape_string($conn, $_POST['kra_pin']);
    $compliance_certificate = mysqli_real_escape_string($conn, $_POST['compliance_certificate']);
    $company_permit = mysqli_real_escape_string($conn, $_POST['company_permit']);
    $cert_incorporation = mysqli_real_escape_string($conn, $_POST['cert_incorporation']);
    $audited_financial_statement = mysqli_real_escape_string($conn, $_POST['audited_financial_statement']);
    $price_per_unit = mysqli_real_escape_string($conn, $_POST['price_per_unit']);
    $total_quote = mysqli_real_escape_string($conn, $_POST['total_quote']);
    $delivery_period = mysqli_real_escape_string($conn, $_POST['delivery_period']);

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

        if (count($errors) == 0){
    $query = "INSERT INTO supplier_applications
    (first_name, middle_name, last_name, company_name, kra_pin, compliance_certificate,  company_permit, cert_of_incorporation, audited_financial_statement, price_per_unit, total_quote, delivery_period ) VALUES
         ('$first_name',
         '$middle_name',
         '$last_name',
         '$company_name',
         '$kra_pin',
         '$compliance_certificate',
         '$company_permit',
         '$cert_incorporation',
         '$audited_financial_statement',
         '$price_per_unit',
         '$total_quote',
         '$delivery_period')";

        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo $result;
        if ($result==1){
            //redirect user
            echo "successfully submitted";
            header('Location:supplier_home_page.php');
        }else{
            echo "submit again";
        }

//
}

//in case connection does not work
else {

    die("Connection failed: " . mysqli_connect_error());


}

}}

?>



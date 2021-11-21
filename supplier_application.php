<?php
include('application_connect.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier Application</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <!-- Navigation-->
    <nav class style="background: #393838" "navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/itender.jpeg" alt="..." /></a>

            <div class="dropdown" style="float: right">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="supplier_home_page.php">Home</a>
                    <a href="#services">Services</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a></div>
                    <style>
                        body{
                            background-image: url("white2.png");
                            font-weight: bold;
                            background-size: cover;

                        }
                        .dropbtn {
                            background-color: #fdd201;
                            color: white;
                            padding: 16px;
                            font-size: 16px;
                            border: none;
                            cursor: pointer;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            right: 0;
                            background-color: #f9f9f9;
                            min-width: 160px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }

                        .dropdown-content a:hover {background-color: #f1f1f1;}
                        .dropdown:hover .dropdown-content {display: block;}
                        .dropdown:hover .dropbtn {background-color: #676666;}
                    </style>

            </div>
        </div>
    </nav>
<body>
<form action="application_connect.php" method="post">
    <h2 style="font-family: 'Tahoma';text-align: center">Contract Application</h2>
    <div class="row1">
        <div class="column1">
    <label style="font-family: Tahoma" for="First Name">First Name</label>
    <input type="text" id="first_name" name="first_name">
    </div>
    <div class="column1">
    <label style="font-family: Tahoma" for="Middle Name">Middle Name</label>
    <input type="text" id="middle_name" name="middle_name">
    </div>
        <div class="column1">
        <label style="font-family: Tahoma" for="Last Name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br><br>
        </div>
    </div>
    <div class="row1">
        <div class="column1">
    <label style="font-family: Tahoma" for="Company name">Name of Company</label>
        <input type="text" id="Company Name" name="company_name">
        </div>
        <div class="column1">
    <label style="font-family: Tahoma" for="KRA Pin">KRA Pin</label><br>
    <input type="file" id="KRA Pin" name="kra_pin">
        </div>
        <div class="column1">
    <label style="font-family: Tahoma" for="Tax Compliance Certificate">Tax Compliance Certificate</label>
    <input type="file" id="Tax Compliance Certificate" name="compliance_certificate"><br><br>
        </div>
        <div class="row1">
            <div class="column1">
            <label style="font-family: Tahoma" for="Certificate of Incorporation">Certificate of Incorporation</label>
    <input type="file" id="Certificate of Incorporation" name="cert_incorporation">
    </div>
            <div class="column1">
            <label style="font-family: Tahoma" for="Company Permit">Company Permit</label>
                <input type="file" id="Company Permit" name="company_permit"></div>
            <div class="column1">
            <label style="font-family: Tahoma" for="Audited Financial Statement">Audited Financial Statement</label>
    <input type="file" id="Audited Financial Statement" name="audited_financial_statement">
            </div>
    </div>
        <div class="row1">
            <div class="column1">

            <label style="font-family: Tahoma" for="Price per unit">Price per unit<br>(Ksh.)</label>
    <input type="text" id="Price per unit" name="price_per_unit"><br><br>
            </div>
            <div class="column1">

            <label style="font-family: Tahoma" for="Total Quotation">Total Quotation<br>(Ksh.)</label>
                <input type="text" id="Total Quotation" name="total_quote" ><br><br></div>
            <div class="column1">

            <label style="font-family: Tahoma" for="Period of delivery">Period of delivery<br>(Days)</label>


    <input type="number" id="Period of delivery" name="delivery_period"><br><br>
            </div>
        </div>
    <input type="submit" value="Submit" name="apply_supplier">



</form>
</body>

</html>
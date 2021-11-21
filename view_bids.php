<?php

$conn = require('conn.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Bids</title>
</head>
<!-- Navigation-->
<nav class style="background: #393838" "navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

<div class="container">
    <a class="navbar-brand" href="supplier_home_page.php"><img style="height: 50px" src="assets/img/itender.jpeg" alt="..." /></a>

    <div class="dropdown" style="float: right">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="staff_dashboard.php">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</div>
<style>
    body{
        background-image: url("white2.png");
        font-weight: bold;
        background-size: cover;


    }

    container.navbar-brand{
       width: auto;
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


    #bidsmngtbl{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #bidsmngtbl td, #bidsmngtbl th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #bidsmngtbl tr:nth-child(even){background-color: #f2f2f2;}

    #bidsmngtbl tr:hover {background-color: #ddd;}

    #bidsmngtbl th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #777671;
        color: white;
</style>

</div>
</div>
</nav>
<body>
<!-- Main content -->

            </div>

<form action="evaluated_connect.php" method="post">
<table border="1" id="bidsmngtbl" class="table table-bordered table-hover datatable-highlight" class="table bg-slate-600">

    <thead>Bids</thead>
    <th>Bid #: </th>
    <th>first_name: </th>
    <th>middle name: </th>
    <th>last name </th>
    <th>company name: </th>
    <th>kra_pin </th>
    <th>compliance_certificate</th>
    <th>cert_of_incorporation </th>
    <th>company_permit </th>
    <th>audited_financial_statement </th>
    <th>price_per_unit </th>
    <th>total_quote </th>
    <th>delivery_period </th>
    <th> Current Status </th>
    <th> Action </th>


    <?php
    $sql = ("SELECT entry,first_name, middle_name, last_name, company_name, kra_pin, compliance_certificate, cert_of_incorporation,company_permit, audited_financial_statement, price_per_unit, total_quote, delivery_period, status FROM supplier_applications");
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $total_rows = $result->num_rows;

    // output data of each row
    while($row1 = $result->fetch_assoc()){

        echo "<tr><td>".$row1["entry"]."</td>";
        echo "<td>".$row1["first_name"]."</td>";
        echo "<td>".$row1["middle_name"]."</td>";
        echo "<td>".$row1["last_name"]."</td>";
        echo "<td>".$row1["company_name"]."</td>";
        echo "<td>".$row1["kra_pin"]."</td>";
        echo "<td>".$row1["compliance_certificate"]."</td>";
        echo "<td>".$row1["cert_of_incorporation"]."</td>";
        echo "<td>".$row1["company_permit"]."</td>";
        echo "<td>".$row1["audited_financial_statement"]."</td>";
        echo "<td>".$row1["price_per_unit"]."</td>";
        echo "<td>".$row1["total_quote"]."</td>";
        echo "<td>".$row1["delivery_period"]."</td>";
        echo "<td>".$row1["status"]."</td>";
        echo "<td><input type ='hidden' id='rows' name='rows' value='".$total_rows."'/></td>";
        echo "<td><label for='status'><select id='status".$row1['entry']."' name='status".$row1['entry']."'><option value='accept'>Accept</option> <option value='decline'>Decline</option><option value='pending'>Pending</option></select></td></tr>";


    }
    ?>
</table>
<input type="submit" name="evaluate">
</form>
        </div>
        <!-- /control position -->
    </div>
    <!-- /content area -->
<?php

} else {
    echo "0 results";
}

$conn->close();

?>

</body>
</html>
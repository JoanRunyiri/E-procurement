<?php
$conn = require('conn.php');



//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {




?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tender</title>
</head>
<!-- Navigation-->
<nav class style="background: #393838" "navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

<div class="container">
    <a class="navbar-brand" href="supplier_home_page.php"><img style="height: 50px" src="assets/img/itender.jpeg" alt="..." /></a>

    <div class="dropdown" style="float: right">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="supplier_home_page.php">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</div>
<style>

    container.navbar-brand{
        height: 50px;
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
    body{
        background-image: url("white2.png");
        background-size: cover;

        font-weight: bold;

    }

    .dropdown-content a:hover {background-color: #f1f1f1;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: #676666;}

    #tendermngtbl{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tendermngtbl td, #tendermngtbl th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tendermngtbl tr:nth-child(even){background-color: #f2f2f2;}

    #tendermngtbl tr:hover {background-color: #ddd;}

    #tendermngtbl th {
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
<div class="content">

    <!-- Highlighting rows and columns -->


        <table border="1" id="tendermngtbl" class="table table-bordered table-hover datatable-highlight" class="table bg-slate-600">

            <thead>Test</thead>
            <th>procurement_id: </th>
            <th>item name:: </th>
            <th>Quantity: </th>
            <th>Tender description: </th>
            <th>Opening Date: </th>
            <th>closing date: </th>
            <th>Tender Document: </th>
                <?php
                $sql = ("SELECT procurement_id, item_name, quantity, tender_description, opening_date, closing_date, tender_document FROM create_tender");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                    echo "<tr><td>".$row1["procurement_id"]."</td>";
                    echo "<td>".$row1["item_name"]."</td>";
                    echo "<td>".$row1["quantity"]."</td>";
                    echo "<td>".$row1["tender_description"]."</td>";
                    echo "<td>".$row1["opening_date"]."</td>";
                    echo "<td>".$row1["closing_date"]."</td>";
                    echo "<td>".$row1["tender_document"]."</td>";
                    echo "<td><button><a href='supplier_application.php'>Apply</a></button>"."</td></tr>";
                }
            ?>
<!--                <th>Procurement ID</th>--><?php //echo $row1['procurement_id']; ?>
<!--                <th>Item Name</th>--><?php //echo $row1['item_name']; ?>
<!--                <th>Quantity</th>--><?php //echo $row1['quantity']; ?>
<!--                <th>Tender Description</th>--><?php //echo $row1['tender_description']; ?>
<!--                <th>Tender Opening Date</th>--><?php //echo $row1['opening_date']; ?>
<!--                <th>Tender Closing Date</th>--><?php //echo $row1['closing_date']; ?>
<!--                <th>Tender Document</th>--><?php //echo $row1['tender_document']; ?>
<!--                <-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!---->
<!--            </tbody>-->
        </table>
    </div>

    <!-- /highlighting rows and columns -->

</div>
<?php

} else {
    echo "0 results";
}

$conn->close();
?>
<!-- /content area -->
</body>
</html>
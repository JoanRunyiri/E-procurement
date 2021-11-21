<?php
include('server.php');

//if ($_SESSION['role']=='admin'){
if ($_SESSION["role"] == 'admin') {?>
    <!DOCTYPE html>
    <html>
    <title>Admin dashboard</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {margin: 0;}

            ul.sidenav {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 25%;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }

            ul.sidenav li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            ul.sidenav li a.active {
                background-color: #4CAF50;
                color: white;
            }

            ul.sidenav li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            div.content {
                margin-left: 25%;
                padding: 1px 16px;
                height: 1000px;
            }

            @media screen and (max-width: 900px) {
                ul.sidenav {
                    width: 100%;
                    height: auto;
                    position: relative;
                }

                ul.sidenav li a {
                    float: left;
                    padding: 15px;
                }

                div.content {margin-left: 0;}
            }

            @media screen and (max-width: 400px) {
                ul.sidenav li a {
                    text-align: center;
                    float: none;
                }
            }
            html{
                background-image: url("white2.png");
                background-size: cover;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

    <ul class="sidenav">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="create_staff.php">Create Employee</a></li>
        <li><a href="view_staff.php">View Employee</a></li>
        <li><a href="view_bids.php">View Bids</a></li>

    </ul>

    </body>
    </html>

   <?php
}else{
    ?>
<!DOCTYPE html>
    <html>
    <title>Staff dashboard</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {margin: 0;}

            ul.sidenav {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 25%;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }

            ul.sidenav li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            ul.sidenav li a.active {
                background-color: #4CAF50;
                color: white;
            }

            ul.sidenav li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            div.content {
                margin-left: 25%;
                padding: 1px 16px;
                height: 1000px;
            }
            body{
                background-image: url("white2.png");
                font-weight: bold;
                background-size: cover;

            }

            @media screen and (max-width: 900px) {
                ul.sidenav {
                    width: 100%;
                    height: auto;
                    position: relative;
                }

                ul.sidenav li a {
                    float: left;
                    padding: 15px;
                }

                div.content {margin-left: 0;}
            }

            @media screen and (max-width: 400px) {
                ul.sidenav li a {
                    text-align: center;
                    float: none;
                }
            }
        </style>
    </head>
    <body>

    <ul class="sidenav">
        <li><a class="active" href="staff_dashboard.php">Home</a></li>
        <li><a href="create_tender.php">Create Tender</a></li>
        <li><a href="view_bids.php">View Applications</a></li>
        <li><a href="#about">Send Purchase Order</a></li>
    </ul>



    </body>
    </html>
   <?php
}
   ?>




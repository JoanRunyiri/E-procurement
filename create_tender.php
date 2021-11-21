<?php
include('create_tender_connect.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Tender</title>
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
                font-weight: bold;
                background-size: cover;

            }

            .dropdown-content a:hover {background-color: #f1f1f1;}
            .dropdown:hover .dropdown-content {display: block;}
            .dropdown:hover .dropbtn {background-color: #676666;}
        </style>

    </div>
</div>
</nav>

<body>
<form action="create_tender_connect.php" method="post">

                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Procurement ID :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="procurement_id" name="procurement_id">

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Item Name :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="itemname" name="item_name"  >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Quantity :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="qty" name="quantity" >
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label" > Tender Description : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="tender_description" name="tender_description" />
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label class="col-lg-4 control-label" > Tender Opening Date </label><br>
                                        <input type="date" name="open_date" id="opening">
                                        <div class="col-lg-8">
<!--                                            <div class="input-group">-->
<!--                                                    <span class="input-group-btn">-->
<!--                                                        <button type="button" class="btn btn-default btn-icon" id="ButtonCreationDemoButton"><i class="icon-calendar3"></i></button>-->
<!--                                                    </span>-->
<!--                                                <input type="text" class="form-control" id="opening" name="open_date" placeholder="Select a date">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label class="col-lg-4 control-label">Tender Closing Date : </label><br>
                                        <input type="date" name="close_date" id="tender_closing_date">
<!--                                        <div class="col-lg-8">-->
<!--                                            <div class="input-group">-->
<!--                                                <span class="input-group-btn">-->
<!--                                                    <button type="button" class="btn btn-default btn-icon" id="tender_closing_date"><i class="icon-calendar3"></i></button>-->
<!--                                                </span>-->
<!--                                                <input type="text" class="form-control" id="closing" name="close_date" placeholder="Select a date">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group">
                                <label class="col-lg-3 control-label ">Bid Document (General Document): </label>
                                <div class="col-lg-9">
                                    <input type="file" id="rbiddoc" name="bid_doc" class="file-input">
                                </div>
                            </div>

                        </div>

                    </fieldset>
                    <input type="submit" value="Submit" name="create_tender">

                    </div>
                </div>
            </div>
        </form>
</body>
</html>

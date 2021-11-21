<?php
session_start();
$conn = require('conn.php');



//insert supplier evaluated data
if (isset($_POST['evaluate'])) {
// Check connection
    if ($conn) {
        echo "success";
        $rows = mysqli_real_escape_string($conn, $_POST['rows']);
        for ($x = 1; $x<=$rows;$x++){
            $status = mysqli_real_escape_string($conn, $_POST['status'.$x]);
            $query = "UPDATE `supplier_applications` SET `status`='".$status."' WHERE entry ='".$x."'";
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            if ($result==1){
                //redirect user
                echo "successfully updated";
                header('Location:staff_dashboard.php');
            }else{
                echo "submit again";
            }
        }

        }

//in case connection does not work
        else {

            die("Connection failed: " . mysqli_connect_error());


        }
//    }
}

?>
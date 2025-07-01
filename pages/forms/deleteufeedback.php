<?php

$con=new mysqli("localhost","root","","ecommercedb");
 
$vid = $_GET['eid'];

$sql = "delete from feedback where feedbackid='$vid'";




if ($con->query($sql) === TRUE) {
    echo " <script>alert('Feedback Removed Successfully...!');window.location.href='viewfeedbackuser.php';</script>";
} else {
    echo " <script>alert('Feedback details not Removed!...');window.location.href='viewfeedbackuser.php';</script>";
}
?>

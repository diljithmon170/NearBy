<?php

$con=new mysqli("localhost","root","","ecommercedb");

$vid = $_GET['eid'];

$sql = "delete from advertisement where advno='$vid'";




if ($con->query($sql) === TRUE) {
    echo " <script>alert('Feedback Removed Successfully...!');window.location.href='viewadverisement.php';</script>";
} else {
    echo " <script>alert('Feedback details not Removed!...');window.location.href='viewadverisement.php';</script>";
}
?>

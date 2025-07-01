<?php

$con=new mysqli("localhost","root","","ecommercedb");
 
$pid = $_GET['pid'];

$sql = "delete from prod_details where pid='$pid'";




if ($con->query($sql) === TRUE) {
    echo " <script>alert('ProductDetails Removed Successfully...!');window.location.href='viewaddproduct.php';</script>";
} else {
    echo " <script>alert('ProductDetails not Removed!...');window.location.href='viewaddproduct.php';</script>";
}
?>

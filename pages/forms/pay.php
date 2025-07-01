<?php
$conn=new mysqli("localhost","root","","ecommercedb");


$pid = $_GET['pid'];

$sql = "UPDATE payment_tbl SET status='Paid' where pid='$pid'";

if ($conn->query($sql) === TRUE) {
    echo " <script>alert('Payment Successfull...!');window.location.href='userpay.php?pid=$pid';</script>";
} else {
    echo " <script>alert('Failed!...');window.location.href='userpay.php';</script>";
}

?>


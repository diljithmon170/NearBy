<?php
$conn=new mysqli("localhost","root","","ecommercedb");

//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email']) || ($_SESSION['email'] == '')) {
    header("location: index.php");
    exit();
}

	 $email=$_SESSION['email'];
	$pwd=$_SESSION['pwd'];

$session_id=$_SESSION['email'];
?>


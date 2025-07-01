<?php
	$con=new mysqli("localhost","root","","ecommercedb");
	
	
	$rid = $_GET['rid'];

$sql = "UPDATE request_tbl SET status='closed' where rid='$rid'";

if ($con->query($sql) === TRUE) {
    echo  "<script>
 
    </script>";
} else {
    echo " <script></script>";
}
?>
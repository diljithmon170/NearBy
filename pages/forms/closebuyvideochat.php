<?php
	$con=new mysqli("localhost","root","","ecommercedb");
	
	
	$rid = $_GET['rid'];
echo $rid;
$sql = "UPDATE request_tbl SET status='closed' where rid='$rid'";
 echo $sql;
if ($con->query($sql) === TRUE) {
    echo  "<script>
         window.location.href='viewrequest.php';
    </script>";
} else {
    echo " <script></script>";
}
?>
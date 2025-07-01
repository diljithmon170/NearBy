<?php 

//session_start();
 include('session.php');

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:index.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>



<?php
							$rid=$_GET["id"];
							
							$conn = new mysqli('localhost', 'root', '', 'ecommercedb');

  $result = $conn->query("select rate,buyername,emailid,seller from  buyerrequest_tbl where id='$rid' ");
  
    while ($row = $result->fetch_assoc()) {
 	 
	//echo $sid;
	 $rate=$row["rate"];
	 $buyername=$row["buyername"];
	 $buyer=$row["emailid"];
	 $seller=$row["seller"];
	}
	//$bal=$qty-1;
	
//echo $bal;
	
	 

	//$conn=new mysqli("localhost","root","","lml");
	
	
	$date = date('Y-m-d');

//$rid=$_GET["rid"];
$sql1 = "UPDATE buyerrequest_tbl SET status='Approved' where id='$rid'";
//echo $sql1;
if ($conn->query($sql1) === TRUE) {
    echo " <script>alert('Successfully Approved Buying Request');window.location.href='viewbuyerrequest.php';</script>";
} else {
    echo " <script></script>";
}

	//$conn=new mysqli("localhost","root","","lml");
		
	//$con=new mysqli("localhost","root","","corporate");
	
	$sql="insert into payment_tbl(id,buyername,buyer,seller,rate,status)values('$rid','$buyername','$buyer','$seller','$rate','Unpaid')";
	
	if($conn->query($sql)==true)
	{
	}
	else{
	}

?>
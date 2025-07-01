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
							$pid=$_GET["pid"];
							$conn = new mysqli('localhost', 'root', '', 'ecommercedb');

  $result = $conn->query("select pname,category,rate,sender from  prod_details where pid='$pid' ");


      
    while ($row = $result->fetch_assoc()) {
 	 $sname = $row['pname'];
	 $scategory=$row['category'];
	 $rate=$row['rate'];
	 //$qty=$row['qty'];
	 $sender=$row['sender'];
	}?>
	
	<?php
	$con=new mysqli("localhost","root","","ecommercedb");
	$date = date('Y-m-d');
	$sql="insert into request_tbl(pname,category,rate,buyer,pid,rdate,seller)values('$sname','$scategory','$rate','$session_id','$sid','$date','$sender')";
	if($con->query($sql)==true)
		
		
	{
		
		echo "<script>
   alert('Your Request has been Sent');
   window.location.href='viewrequest.php';
    </script>";
		
	}
	else
	{
	echo '<script language="javascript">';
		echo 'alert("Failed")';
		echo '</script>';
	}

	mysqli_close($con);

?>

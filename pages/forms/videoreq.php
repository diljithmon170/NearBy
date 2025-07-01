<?php 

//session_start();
 include('session.php');

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:index.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];


							$pid=$_GET["pid"];
							$conn = new mysqli('localhost', 'root', '', 'ecommercedb');

  $result = $conn->query("select pname,category,rate,sender from  prod_details where pid='$pid' ");


      
    while ($row = $result->fetch_assoc()) {
 	
	 $seller=$row['sender'];
	 
	 //echo "$seller";
	
	}
	$result1 = $conn->query("select firstname,sid from  seller_tbl where emailid='$seller' ");


      
    while ($row = $result1->fetch_assoc()) {
 	
	 $sellername=$row['firstname'];
	 $sellerid=$row['sid'];
	 
	
	}
	$result2 = $conn->query("select firstname,lid from  buyer_tbl where emailid='$session_id' ");


      
    while ($row = $result2->fetch_assoc()) {
 	
	 $buyername=$row['firstname'];
	 $buyerid=$row['lid'];
	
	
	}

	// Connect to database server
													


													// SQL query
													$todaydate = date("Y-m-d");
													

 													$keycode= rand(1000,10000);

			   										$link1="https://meet.jit.si/".strval($keycode);
			   										echo $link1;


//$sql="insert into user(firstname,lastname,gender,contactnumber,emailid,address,password,retype)values('$firstname','$lastname','$gender','$contactnumber','$emailid','$address','$password','$retype')";
	


								$sql = "insert into request_tbl(buyerid,buyername,sellerid,sellername,link,reqdate,buyer,seller) VALUES('$buyerid','$buyername','$sellerid','$sellername','$link1','$todaydate','$session_id','$seller')";


										if($conn->query($sql)==true)
				//echo $sql;
													// Execute the query (the recordset $rs contains the result)
													//$rs1 = mysql_query($strSQL);
													//echo $rs1;
													//mysql_close();

													 $redirects = 'false';
													echo $sql;
													if($sql>0){
														 $redirects = 'true';
													}else{



													}       



												?>
												<?php
												if($redirects == 'true'){
													$ermsg="Booked ";
											 		header("Location: viewproduct.php");
												}else{
												$ermsg="Error.";
											 		header("Location: viewproduct.php");
												}

												?>

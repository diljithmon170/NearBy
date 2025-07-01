
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>AMAPP</title>
	<meta name="description" content="">
	<meta name="author" content="WebThemez">
	<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<!--[if lte IE 8]>
			<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/animate.css" rel="stylesheet" media="screen">
	<!-- Owl Carousel Assets -->
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css" />
	<!-- Font Awesome -->
	<link href="font/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/modernizr-latest.js"></script>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="js/jquery.nav.js" type="text/javascript"></script>
	<script src="js/jquery.fittext.js"></script>
	<script src="js/waypoints.js"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="js/owl-carousel/owl.carousel.js"></script>
	<script>
	history.pushState(null, null, document.URL);
		window.addEventListener('popstate', function () {
		    history.pushState(null, null, document.URL);
			});
	</script>
<script>
history.pushState(null, null, document.URL);
	window.addEventListener('popstate', function () {
	    history.pushState(null, null, document.URL);
		});
		function videochat(id,name){
		alert("tutorid:"+tutorid);
		alert("turorname:"+vturorname);
	//alert("This is from select no");
	var parentid = document.form.parentid;
	var parentname = document.form.parentname;

	parentid.value=id;
	parentid.value=name;



	document.getElementById("form").submit();

		}

function closeChat(url,chatrequest)
	 {
	 alert(url);alert(chatrequest);
	// window.open(url);
	 document.getElementById("chatno").value=chatrequest;
	 document.getElementById("form").action="closevideochatrequesthandler.php";
	 document.getElementById("form").submit();
	 }
	function openChat(url)
	 {
	 //alert(url);
	 window.open(url);
	// document.getElementById("vchatproductid").value=pids;
	// document.getElementById("vcupdate").submit();
	 }
</script>
</head>
<body >
	<?php
	session_start();
	?>
	<header class="header">
	  <div class="container">
	    <nav class="navbar navbar-inverse" role="navigation">
	      <div class="navbar-header">
	        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span>  </button>
	        <a href="adminhome.php" class="navbar-brand scroll-top logo  animated bounceInLeft"><img src="images/logo.png" alt="logo" /></a><h1 style="margin-left:70px">ARTIFICIUM</h1> </div>
	      <!--/.navbar-header-->

	      <div id="main-nav" class="collapse navbar-collapse">
			<br>
	        <ul class="nav navbar-nav" id="mainNav">
			<li ><a href="#" class="scroll-link" style="color:darkblue">Welcome Seller->[<?php echo $_SESSION['sellername'] ?>]</a></li>
	         <li ><a href="sellerhome.php" class="scroll-link" >Home</a></li>
	        <li ><a href="sellerprofilehandling.php" class="scroll-link">Profile</a></li>
	         <li ><a href="sellerproducthandling.php" class="scroll-link">Product</a></li>
	         <li ><a href="sellervideohandling.php" class="scroll-link" style="color:blue">Video</a></li>
	          <li ><a href="sellerpaymenthandling.php" class="scroll-link">Payment</a></li>
	            <li ><a href="sellerfeedbackhandling.php" class="scroll-link">Feedback</a></li>
	           <li><a href="login.php" class="scroll-link">Logout</a></li>

	          <br>
	        </ul>
	      </div>
	      <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	  </div>
	  <!--/.container-->
</header>
<div id="#top"></div>
<section id="home"><br><br><br><br>

    <div class="container banner-content">

  </div>
</section>
<!------------------------------------------------------------->
<section id="services" class="page-section colord">
  <div class="container" style="height:400px;overflow:auto">


<!------------------------------>

												<form name="form" id="form" method="post" >
																			<input type="hidden" name="chatno" id="chatno">
																			<input type="hidden" name="closerequestfrom" id="closerequestfrom" value="sellerfrombuyer">
												<table class="scroll" style="color:black;opacity:0.9;margin-top: 0px;width:1000px;margin-left:0px" align="left" >
																				<tbody>


																			<tr><td style="font-weight: bold;background:#EFC61C ;" colspan="14" >FROM BUYER</td></tr>
																						<tr style="background: #9A6600;">
																								<td>No</td>
																								<td>FromId</td>
																								<td>FromName</td>
																								<td>FromType</td>
																								<td>ToId</td>
																								<td>ToName</td>
																								<td>ToType</td>
																								<td>Status</td>
																								<td>ReqDate</td>
																								<td>Chat</td>




																							</tr>

																							<?php
																								// Connect to database server
																									mysql_connect("localhost", "root", "") or die (mysql_error());
																									$sellerid = $_SESSION["sellerno"];
																									// Select database
																									mysql_select_db("amapp") or die(mysql_error());

																									// SQL query

																									$strSQL = "SELECT * FROM discussionrequest where fromtype='buyer' and toid='$sellerid'  ";
																									//echo $strSQL;
																									// Execute the query (the recordset $rs contains the result)
																									$rs = mysql_query($strSQL);

																							  while($row = mysql_fetch_array($rs)) {


																								?>

																							<tr style="background: #EFC61C;">
																								<td><?php echo $row['verqid'] ?></td>
																								<td><?php echo $row['fromid'] ?></td>
																								<td><?php echo $row['fromname'] ?></td>
																								<td><?php echo $row['fromtype'] ?></td>
																								<td><?php echo $row['toid'] ?></td>
																								<td><?php echo $row['toname'] ?></td>
																								<td><?php echo $row['totype'] ?></td>
																								<td><?php echo $row['status'] ?></td>
																								<td><?php echo $row['reqdate'] ?></td>
																								<?php if($row['status']!="closed"){ ?>

						                                                                        <td><a href="javaScript:{openChat('<?php echo $row['link'] ?>');}">OpenChat</a>&nbsp;<a href="javaScript:{closeChat('<?php echo $row['link'] ?>','<?php echo $row['verqid'] ?>');}">CloseChat</a></td>
						                                                                        <?php } else{?>
						                                                                        <td>-</td>
						                                                                        <?php } ?>






																							</tr>


																							<?php

																								}
																								mysql_close();
																							?>
																			</tbody>
																						</table>
									</form>

<!----------------------------------------------------->





  </div>
  <!--/.container-->
</section>
<!------------------------------------------------------------->

	<?php

	?>
	<section class="copyright">
	  <div class="container">
	    <div class="row">
	         <div class="col-sm-12 text-center"> Copyright | All Rights Reserved - <b> AMAPP </b> </div>
	    </div>
	    <!-- / .row -->
	  </div>
	</section>
	</body>
</html>


<?php

												// Connect to database server
													mysql_connect("localhost", "root", "") or die (mysql_error());

													// Select database
													mysql_select_db("amapp") or die(mysql_error());




													// SQL query
													$todaydate = date("Y-m-d");
													$ssellerid=$_POST['ssellerid'];
													$sellername=$_POST['sellername'];
													$fromtype=$_POST['fromtype'];
													$totype=$_POST['totype'];
													$buyerid=$_POST['buyerid'];
													$buyername=$_POST['buyername'];

 													$keycode= rand(1000,10000);

			   										$link1="https://meet.jit.si/".strval($keycode);
			   										echo $link1;





													$strSQL = "insert into discussionrequest (fromid,fromname,fromtype,toid,toname,totype,link,reqdate) VALUES("."\"".$buyerid."\","."\"".$buyername."\","."\"".$fromtype."\","."\"".$ssellerid."\","."\"".$sellername."\", "."\"".$totype."\","."\"".$link1."\", "."\"".$todaydate."\")";


													echo $strSQL;
													// Execute the query (the recordset $rs contains the result)
													$rs1 = mysql_query($strSQL);
													echo $rs1;
													mysql_close();

													 $redirects = 'false';
													 echo $rs1;
													if($rs1>0){
														   $redirects = 'true';
													}else{



													         }



												?>
												<?php
												if($redirects == 'true'){
													$ermsg="Booked ";
											 		header("Location: buyerproducthandlingvideo.php");
												}else{
												$ermsg="Error.";
											 		header("Location: buyerproducthandlingvideo.php");
												}

												?>
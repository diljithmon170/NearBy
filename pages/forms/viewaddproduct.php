
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



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NearBy </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">



    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php
        //include("../../config.php");
        //include('../../session.php');
        ?>
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-lg"><b>NearBy</b>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>NearBy</b>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <!--                            <li class="dropdown messages-menu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-envelope-o"></i>
                                                                <span class="label label-success"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="header">You have 4 messages</li>
                                                                <li>
                                                                     inner menu: contains the actual data
                                                                    <ul class="menu">

                                                                         end message
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="pull-left">
                                                                                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                                                </div>
                                                                                <h4>
                                                                                    Manager
                                                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                                                </h4>
                                                                                <p>Example Message</p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="pull-left">
                                                                                    <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                                                </div>
                                                                                <h4>
                                                                                    Manager
                                                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                                                </h4>
                                                                                <p>Example Message</p>
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                                <li class="footer"><a href="#">See All Messages</a></li>
                                                            </ul>
                                                        </li>-->
                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Seller</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->

                                    <!-- Menu Body -->
                                    <!--                                    <li class="user-body">
                                                                            <div class="row">
                                                                                <div class="col-xs-4 text-center">
                                                                                    <a href="#">Followers</a>
                                                                                </div>
                                                                                <div class="col-xs-4 text-center">
                                                                                    <a href="#">Sales</a>
                                                                                </div>
                                                                                <div class="col-xs-4 text-center">
                                                                                    <a href="#">Friends</a>
                                                                                </div>
                                                                            </div>
                                                                             /.row
                                                                        </li>-->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">

                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
<!--                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->

   <?php include('uside.php');?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       View product Details
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!--                                        <li><a href="#">ToPay</a></li>-->
                        <li class="active">View product Details </li>
                    </ol>
                </section>
<input type="hidden" name="Date" readonly = "readonly"  value="<?php echo date('d/m/y');?>"/>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">View product Details</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

								   <table  class="table table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>productid</th>
												<th>productName</th>
												<th>Category</th>
                                                <th>Specification</th>
                                              <th>Location</th>
											  <th>Details</th>
											    <th>shopname</th>
											      <th>shopcontact</th>


                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
			// $pid = $_GET['pid'];
          $con = new mysqli("localhost", "root", "", "ecommercedb");

            $sql = "select * from prod_details where sender='$session_id'";
			$result = $conn->query($sql);

 while($row = $result->fetch_assoc())
	{
   //$count = 1;
  echo"<tr>";
//$qty=$row["qty"];
echo"<td width='100'>".$row["pid"]."</td>";
echo"<td width='100'>".$row["pname"]."</td>";
echo"<td width='100'>".$row["category"]."</td>";

			echo"<td width='100'>".$row["pspec"]."</td>";
			echo"<td width='100'>".$row["location"]."</td>";
			echo"<td width='100'>".$row["pdetails"]."</td>";
			echo"<td width='100'>".$row["shopname"]."</td>";
			echo"<td width='100'>".$row["shopcontact"]."</td>";
			//echo"<td width='100'>".$row["description"]."</td>";
			//echo"<td width='100'>".$row["contactnumber"]."</td>";

	echo'<td>  <button type="button" class="btn btn-default btn-danger"><i class="glyphicon glyphicon-trash" value="Delete"  onClick="del(' . $row["pid"] . ')">Delete</i></button></td>';
				}echo"</tr>";
			?>



                  </tbody>
                                        <br />
                                    </table>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.8
                </div>
                <strong>Copyright &copy; Ecommerce .</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>

            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });

        </script>
    </body>
</html>
 <script>

function del(pid) {
                var r = confirm("Do you want to Delete product Details? ");
                if (r == true) {
                    window.location.href = "deleteproduct.php?pid=" + pid;
                }
            }
			</script>

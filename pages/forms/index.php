<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
 &nbsp;&nbsp;&nbsp;<a href="../../index.html" style="float:right">Back</a>
<div class="login-box">
  <div class="login-logo" style="font-size:40px;">
   <a href=""><b><h1 style="color:black;">Login</h1></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="uname" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pswd" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
<?php


$con=new mysqli("localhost","root","","ecommercedb");
if(isset($_POST['submit']))
{
 ob_start();
 $uname=$_POST['uname'];
 $pswd=$_POST['pswd'];

 $sql="SELECT * FROM admin WHERE emailid='$uname' and password='$pswd'";

 $result=$con->query($sql);

 $count=$result->num_rows;
 if($count==1)
 {
  $_SESSION['email']="$uname";

$_SESSION['pwd']="$pswd";
header('location:admin.php');
 }
 else
 {
  $sql="SELECT * FROM seller_tbl WHERE emailid='$uname' and password='$pswd'";

 $result=$con->query($sql);

 $count=$result->num_rows;
  if($count==1)
  {
   $_SESSION['email']="$uname";

$_SESSION['pwd']="$pswd";
header('location:seller.php');
 }

   else
 {
  $sql="SELECT * FROM buyer_tbl WHERE emailid='$uname' and password='$pswd'";

 $result=$con->query($sql);

 $count=$result->num_rows;
  if($count==1)
  {
   $_SESSION['email']="$uname";

$_SESSION['pwd']="$pswd";
header('location:buyer.php');
 }
  else
  {

  echo'<script language="javascript">';
echo 'alert("Invalid Username or Password")';
echo '</script>';
 }
}}
 //mysqli_close($con);
 $con->close();
}
?>
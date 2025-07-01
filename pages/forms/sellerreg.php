<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LML</title>
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
<div class="login-box">
  <div class="login-logo" style="font-size:40px;">
    <b>NearBy</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   <b> <p style="font-size:20px;color:black" class="login-box-msg">Seller Register&nbsp;&nbsp;&nbsp;<a href="../../index.html">Back</a></p></b>

    <form  method="post">
	<div class="form-group has-feedback">
        <input type="text" name="firstname" class="form-control" placeholder="FirstName">

      </div>
	  <div class="form-group has-feedback">
        <input type="text" name="lastname" class="form-control" placeholder="LastName">

      </div>
	  <div class="form-group has-feedback">
        <select name="gender" class="form-control">
		<option selected disabled><--Select Gender--></option>
       <option value="Female">Female</option>
<option value="male">Male</option>
<option value="Others">Others</option></select></div>

	  <div class="form-group has-feedback">
        <textarea  name="address" class="form-control" placeholder="Address"></textarea>

      </div>
	   <div class="form-group has-feedback">
       <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "12"
   name="contactnumber"  id="contactnumber" placeholder="contactnumber" class="form-control"  required=""/>

      </div>
      <div class="form-group has-feedback">
        <input type="email" name="emailid" class="form-control" placeholder="Email">

      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">

      </div>
	  <div class="form-group has-feedback">
        <input type="password" name="retype" id="retype" class="form-control" placeholder="RetypePassword">
        <p align="center" id="pswd" onChange="check()" style="color:white"></p>

      <script>
					function check()
					{
					var p1=document.getElementById('password').value;
					var p2=document.getElementById('retype').value;
					if(p1!=p2)
					{
					document.getElementById("password").innerHTML="ConfirmPassword is not same as Passwords field";
					document.getElementById("retype").value="";
					}
					else

					{
					document.getElementById("password").innerHTML="";
					}}
					</script>
							</div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form></div></div>


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
if(isset($_POST["submit"]))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$contactnumber=$_POST['contactnumber'];
	$emailid=$_POST['emailid'];
	$address=$_POST['address'];
    $password=$_POST['password'];
	$retype=$_POST['retype'];
	$con=new mysqli("localhost","root","","ecommercedb");

	$sql="insert into seller_tbl(firstname,lastname,gender,contactnumber,emailid,address,password,retype)values('$firstname','$lastname','$gender','$contactnumber','$emailid','$address','$password','$retype')";
	if($con->query($sql)==true)

	{

		echo "<script>
   alert('Successfully Registered');
   window.location.href='index.php';
    </script>";
	}
	else
	{
	echo '<script language="javascript">';
		echo 'alert("Registration Failed")';
		echo '</script>';
	}

	mysqli_close($con);
}
?>
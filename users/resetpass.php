<?php

include 'db.php';
include 'login.php';


if(isset($_POST['btn-reset']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$phone = $MySQLi_CON->real_escape_string(trim($_POST['phone']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	$password_again = $MySQLi_CON->real_escape_string(trim($_POST['password_again']));

	$new_password = password_hash($upass, PASSWORD_DEFAULT);
	
	$query = $MySQLi_CON->query("SELECT name, email,phone, password FROM users WHERE email='$email' AND phone='$phone'");
	$row=$query->fetch_array();

	if($upass!=$password_again){
      	$msg3 = "<div class='alert alert-danger col-sm-12 col-md-12''>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Passwords Do Not Match . Try Again !
					</div>";
       }else{
	if ($row['email']==$email) {
		$updateQuery1 = "UPDATE users SET password='$new_password' WHERE email='$email'";
		mysqli_query($MySQLi_CON,$updateQuery1);

			if(isset($_SESSION['userSession']))
				{
				//session_start();
				session_destroy();
				unset($_SESSION['userSession']);
				//header("Location: ../home");
				exit();
			}
			include 'mailed.php';

		$msg3 = "<div class='alert alert-success col-md-12 col-sm-12'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Password successfully Changed !<br>
						<a href='index' >Log In to account </a>
					</div>";

	}else {
		$msg3 = "<div class='alert alert-danger col-sm-12 col-md-12'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Email or Phone No does not Match existing Acount details!! <br>
					<p> <a href='../index'>Contact Admin</a></p>
				</div>";
	}

}
}

	$MySQLi_CON->close();

?>
<!DOCTYPE html>
<html>
	<head>
		<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="venturezhub.com">

    <title>Venturez Hub | Reset Pass</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png" type="image/x-icon">
	
		
	</head>
	<body>


<div class="col-md-12">
<div class="container" id="change">
	<div class="row">


		<div class="login-form col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2"><br><br>
						  <h2 class=" title text-center">Reset your password</h2>  <br><br><br><br>

						 <?php
							if(isset($msg3)){
								echo $msg3;
							}
							?>
						
						  <form action="#" method="post" id="register-form">

							<div class="form-group col-md-12 col-sm-12">
							<label class="login-field-icon fui-user" for="login-email">Enter Your Email here</label>
							  <input type="email" name="email" class="form-control login-field" value="" placeholder="Enter your email" id="login-email" required />
							  <span class="help-block" id="error"></span>
							  
							</div>

							<div class="form-group col-md-12 col-sm-12">
							<label class="login-field-icon fui-user" for="login-email">Enter Your Phone No here</label>
							  <input type="number" name="phone" class="form-control login-field" value="" placeholder="Enter your phone no" id="login-no" required />
							  <span class="help-block" id="error"></span>
							  
							</div>
							

							<div class="form-group col-md-12 col-sm-12">
							<label class="login-field-icon fui-lock" for="login-pass"> Enter Your New Password</label>
							  <input type="password" name="password" class="form-control login-field" value="" placeholder="Password" id="password" required />
							   <span class="help-block" id="error"></span>
							   

							</div>
							<div class="form-group col-md-12 col-sm-12">
							 <label class="login-field-icon fui-lock" for="login-pass">Confirm your new password</label>
							  <input type="password" name="password_again" class="form-control login-field" value="" placeholder="Confirm Password" id="login-pass" required />
							  <span class="help-block" id="error"></span>
							 
							</div>
							<div class="form-group col-md-12 col-sm-12">
							<input name="btn-reset" class="btn btn-primary  btn-block" onclick="return validate();" value="Reset Password" type="submit"/><br>
							

							</div>
						</form>
				<p>Back<a class="login-link1" href="index">Home</a></p>
			 </div>

			 	
	</div>
</div>

</div><div class="clearfix"></div>


<footer>
	<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					
					<p>&copy;Copyright  <?php echo date('Y') ; ?> - Venturez. All rights reserved. | By; <a class="appslab" href="http://appslab.co.ke/"> Apps:Lab</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
</footer>

	   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>	
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.js"></script>
     <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/register.js"></script>
	</body>
</html>
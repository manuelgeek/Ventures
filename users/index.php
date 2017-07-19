<?php

include 'login.php';
if(isset($_SESSION['userSession']))
{
	header("Location: ../index");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="venturezhub.com">

    <title>Venturez Hub | Sign In</title>

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
					<div class="container">
						 
					
						<div class="login-screen col-md-12">
						<br><br><br><br>
						 
							<h2 class="h2 text-center">Venturez Hub <small> Sign In</small></h2>  <br><br><br>


							
							<?php
							if(isset($msg1)){
								echo $msg1;
							}
							?>


						<form  method="post">
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							  <input type="email" name="email" class="form-control login-field" value="" placeholder="Enter your email" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name"></label>
							</div>

							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							  <input type="password" name="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass"></label>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							<input class="btn btn-primary  btn-block" value="Sign In" name="btn-login" type="submit"/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							<input  value="Log In" name="btn-login" type="checkbox"/><span class="login-link">Remember Me</span><br><br>
							<a class="login-link" href="resetpass">Lost your password?</a><br><br><br>
							<p>Have No Account?<a class="login-link" href="sign_up">Register Account</a></p><br>
							</div>
						</form>
				 </div>
<br><br>

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
	</body>
</html>
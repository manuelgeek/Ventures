<?php
include 'db.php';
include 'login.php';
include'register.php';



if(isset($_SESSION['userSession']))
{
	header("Location: ../index");
}


?>

<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="venturezhub.com">

    <title>Venturez Hub | Sign Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png" type="image/x-icon">
		<script type='text/javascript'>
			function refreshCaptcha(){
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
		</script>
	
		
	</head>
	<body>
					<div class="container">
						  <div class="login-form col-md-12 col-sm-12 ">
						 <!-- <h2 class="signup">New to ASAWA? Sign Up</h2>-->
						 <h2 class="h2 text-center">Venturez Hub<small> Sign Up</small></h2>



						  <?php
							if(isset($msg)){
								echo $msg;
							}
							else{
								?>
					            <!--<div class='alert alert-info col-md-7 col-sm-7'>
									<span class='glyphicon glyphicon-asterisk'></span> &nbsp; all the fields are mandatory !
								</div>-->
					            <?php
							}
							?>


						  <form  method="post" id="register-form">
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							  <input type="text" class="form-control login-field" value="" placeholder="Enter your Full Name" id="login-name" name="full_name" required />
							   <span class="help-block" id="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							  <input type="email" name="email" class="form-control login-field" value="" placeholder="Enter your email" id="login-email" required />
							 
							   <span class="help-block" id="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
							  <input type="number" name="phone" class="form-control login-field" value="" placeholder="Enter your Phone No" id="login-no"	required />
							 
							   <span class="help-block" id="error"></span>
							</div>

							<div class="form-group col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
							  <input type="password" name="password" id="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" required />
							  
							  <span class="help-block" id="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
							  <input type="password" name="password_again" class="form-control login-field" value="" placeholder="Confirm Password" id="login-pass" required />
							 
							  <span class="help-block" id="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-3">
							<input  value="Log In" name="checkbox1" id="checkboxid" type="checkbox"><span class="login-link" required />I Accept Terms and Conditions of <b>Venturez Hub</b></span></input>
							 <span class="help-block" id="error"></span>

							 <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
								    <?php if(isset($msg2)){?>
								    <tr>
								      <td colspan="2" align="center" valign="top"><?php echo $msg2;?></td>
								    </tr>
								    <?php } ?>
							 </table>
								   
								<ul class="captchacode" style="list-style: none;">
									<li><img src='captcha.php?rand=<?php echo rand();?>' id='captchaimg'/></li>
								        
								    <li> <label for='message'>Enter the code above here :</label> <input id="captcha_code" name="captcha_code" type="text"></li>
								</ul>
								        
								        
								        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
								
								   
								    
								 


							<input name="btn-signup" class="btn btn-primary  btn-block" onclick="return validate();" value="Sign Up" type="submit"/>
							
							<br>
						
							<p>Already Have Account?<a class="login-link1" href="index">Sign In</a></p>
							</div>
						</form>
						  </div>
			
					  </div>
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
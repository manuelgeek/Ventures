
<?php
//session_start();
include 'db.php';

if(isset($_POST['btn-signup']))
{
	$uname = $MySQLi_CON->real_escape_string(trim($_POST['full_name']));
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$phone = $MySQLi_CON->real_escape_string(trim($_POST['phone']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	$password_again = $MySQLi_CON->real_escape_string(trim($_POST['password_again']));
	
	$new_password = password_hash($upass, PASSWORD_DEFAULT);

	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg2="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!
		$msg2="<span style='color:green'>The Validation code has been matched.</span>";		

	
	if($upass!=$password_again){
      	$msg = "<div class='alert alert-danger col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Passwords Do Not Match !
					</div>";
       }else{


	$check_email = $MySQLi_CON->query("SELECT email, phone FROM users WHERE email='$email' OR phone='$phone'");
	$count=$check_email->num_rows;
	
	if($count==0){
		
		
		$query = "INSERT INTO users(name,email,phone,password) VALUES('$uname','$email','$phone','$new_password')";
		
		if($MySQLi_CON->query($query))
		{
			
					include 'mailer.php';
					
					$query3 = $MySQLi_CON->query("SELECT * FROM users WHERE email='$email'");
					$row=$query3->fetch_array();
					$_SESSION['userSession'] = $row['email'];
					header("Location: ../index"); // redirects home page after 3 seconds.
		}
		else
		{
			$msg = "<div class='alert alert-danger col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
	}
	else{
		
		
		$msg = "<div class='alert alert-danger col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email or Phone No already Registered !
				</div>";
			
	}

	}
}
	$MySQLi_CON->close();
}
?>



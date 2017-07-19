<?php
session_start();
include 'db.php';



if(isset($_POST['btn-login']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	
	$query = $MySQLi_CON->query("SELECT  email, password FROM users WHERE email='$email'");
	$row=$query->fetch_array();
	
	if(password_verify($upass, $row['password']))
	{
		$_SESSION['userSession'] = $row['email'];
		header("Location: ../index.php");
	}
	else
	{
		$msg1 = "<div class='alert alert-danger col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; email or password does not exists !
				</div>";
	}
	
	$MySQLi_CON->close();
	
}
?>
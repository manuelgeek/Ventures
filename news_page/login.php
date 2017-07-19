<?php
session_start();
include_once 'db.php';



if(isset($_POST['btn-id']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$password = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	
	$query = $MySQLi_CON->query("SELECT * FROM adminn WHERE admin='$email'");
	$row=$query->fetch_array();
	
	if($password== $row['password'])
	{
		$_SESSION['adminSession'] = $row['admin'];
		header("Location: adminn");
	}
	else
	{
		$msg1 = "<div class='alert alert-danger col-sm-7 col-md-7'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; ID Does not exists or wrong pass !
				</div>";
	}
	
	$MySQLi_CON->close();
	
}
?>
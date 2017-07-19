<?php


	session_start();
	session_destroy();
	unset($_SESSION['adminSession']);
	header("Location: index");
	exit();

?>
<?php
	//setcookie('status', "OK", time()-3600, '/');
	session_start();
	session_destroy();
	//$_SESSION['status']  = "Ok";
	header('location: login.html');
?>
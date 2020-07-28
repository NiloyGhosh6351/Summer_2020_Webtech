<?php

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else if( isset($_COOKIE['username']) && isset($_COOKIE['password'])){
			
			if($username == $_COOKIE['username'] && $password == $_COOKIE['password']){
				//$_SESSION['status']  = "Ok";

				//setcookie('status', "OK", time()+3600, '/');
				header('location: dashboard.html');

			}else{
				echo "Invalid username/password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		header("location: login.html");
	}


?>
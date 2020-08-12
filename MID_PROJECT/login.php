<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 		= $_POST['username'];
		$password 		= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{
			
			$conn =mysqli_connect('127.0.0.1', 'root', '', 'healthcaremanagementsystem');
			$sql = "select * from registration where username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user)){
				//$_SESSION['status']  = "Ok";
				$_SESSION['username']  = $username;
				//setcookie('username',$username, time()+3600, '/');
				//setcookie('email',$email, time()+3600, '/');
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}

?>
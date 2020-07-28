<?php

	if(isset($_POST['submit'])){

		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$enc = md5($password);

		if(empty($name) || empty($password) || empty($email)){
			echo "null submission";
		}else {

			$user = [
						'name'=>$name,
						'email'=>$email,
						'password'=>$password
					];

			setcookie('name', $name, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $enc, time()+3600, '/');

			header('location: .html');
		}

	}else{
		header("location: .html");
	}


?>
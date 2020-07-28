<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword) || empty($gender) || empty($day) || empty($month) || empty($year)){
			echo "fillup the table";
		}else {

			setcookie('name', $name, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('username', $username, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('confirmpassword', $confirmpassword, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');

			header('location: home.html');
		}

	}else{
		header("location: login.html");
		//echo "invalid";
	}


?>
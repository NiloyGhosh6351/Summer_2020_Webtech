<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$usertype = $_POST['usertype'];

		if(empty($id) || empty($password) || empty($confirmpassword) || empty($name) || empty($email) || empty($usertype)){
			echo "null submission";
		}else {

			$file = fopen('registration.txt', 'a');
			fwrite($file, $id.'|'.$password.'|'.$confirmpassword.'|'.$name.'|'.$email.'|'.$usertype."/r/n");
			fclose($file);



			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>
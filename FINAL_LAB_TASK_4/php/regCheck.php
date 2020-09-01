<?php 
require_once('../service/userService.php');
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$user = [
				'username'=> $username,
				'email'=> $email,
				'password'=> $password
				
			];			
$status = insert($user);
echo $status;
?>
<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$authorname = $_POST['authorname'];
		$contactnumber = $_POST['contactnumber'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$type 	= $_POST['type'];

		if(empty($authorname) || empty($contactnumber) || empty($username) || empty($password) || empty($type)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'authorname'=>$authorname,
				'contactnumber'=>$contactnumber,
				'username'=> $username,
				'password'=> $password,
				'type'=> $type
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>
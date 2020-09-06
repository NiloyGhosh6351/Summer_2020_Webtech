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

		$authorname = $_POST['authorname'];
		$contactnumber = $_POST['contactnumber'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$type 	= $_POST['type'];

		if(empty($username) || empty($password){
			header('location: ../views/edit.php?type={$type}');
		}else{

			$user = [
				'authorname'=>$authorname,
				'contactnumber'=>$contactnumber,
				'username'=> $username,
				'password'=> $password,
				'type'=> $type
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?type={$type}');
			}
		}
	}

?>
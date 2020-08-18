<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	//user
	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
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
	//delete user
	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/delete.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=delete_done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}

	//company

	//add user
	if(isset($_POST['createcompany']))
	{
		$companyname 	= $_POST['companyname'];
		$profiledescription 	= $_POST['profiledescription'];
		$industry 		= $_POST['industry'];
		$companywebsite 		= $_POST['companywebsite'];
		$filedir 		= $_POST['companylogo'];
		$useraccountid 		= $_POST['useraccountid'];

		if(empty($companyname) || empty($profiledescription) || empty($industry) || empty($companywebsite) || empty($filedir) || empty($useraccountid))
		{
			header('location: ../views/create_company_details.php?error=null_value');
		}
		else
		{

			$usercompany = [
				'companyname'=> $companyname,
				'profiledescription'=> $profiledescription,
				'industry'=> $industry,
				'companywebsite'=> $companywebsite,
				'companylogo'=> $filedir,
				'useraccountid'=> $useraccountid
			];

			$status = insert1($usercompany);

			if($status){
				header('location: ../views/company_details.php?success=done');
			}else{
				header('location: ../views/create_company_details.php?error=db_error');
			}
		}
	}

	//update 
	if(isset($_POST['editcompany']))
	{

		$companyname 	= $_POST['companyname'];
		$profiledescription 	= $_POST['profiledescription'];
		$industry 		= $_POST['industry'];
		$companywebsite 		= $_POST['companywebsite'];
		$filedir 		= $_POST['companylogo'];
		$useraccountid 		= $_POST['useraccountid'];
		$id 		= $_POST['id'];

		if(empty($companyname) || empty($profiledescription) || empty($industry) || empty($companywebsite) || empty($filedir) || empty($useraccountid))
		{
			header('location: ../views/editcompany.php?id={$id}');
		}
		else
		{

			$usercompany = [
				'companyname'=> $companyname,
				'profiledescription'=> $profiledescription,
				'industry'=> $industry,
				'companywebsite'=> $companywebsite,
				'companylogo'=> $filedir,
				'useraccountid'=> $useraccountid,
				'id'=> $id
			];

			$status = update1($usercompany);

			if($status)
			{
				header('location: ../views/company_details.php?success=done');
			}
			else
			{
				header('location: ../views/editcompany.php?id={$id}');
			}
		}
	}
	//delete 
	if(isset($_POST['delete']))
	{

		$companyname 	= $_POST['companyname'];
		$profiledescription 	= $_POST['profiledescription'];
		$industry 		= $_POST['industry'];
		$companywebsite 		= $_POST['companywebsite'];
		$filedir 		= $_POST['companylogo'];
		$useraccountid 		= $_POST['useraccountid'];
		$id 		= $_POST['id'];

		if(empty($companyname) || empty($profiledescription) || empty($industry) || empty($companywebsite) || empty($filedir) || empty($useraccountid))
		{
			header('location: ../views/delete_company.php?id={$id}');
		}
		else
		{

			$usercompany = [
				'companyname'=> $companyname,
				'profiledescription'=> $profiledescription,
				'industry'=> $industry,
				'companywebsite'=> $companywebsite,
				'companylogo'=> $filedir,
				'useraccountid'=> $useraccountid,
				'id'=> $id
			];

			$status = delete1($usercompany);

			if($status)
			{
				header('location: ../views/company_details.php?success=delete_done');
			}
			else
			{
				header('location: ../views/delete_company.php?id={$id}');
			}
		}
	}

?>
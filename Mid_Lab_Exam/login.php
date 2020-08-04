<?php
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 	= $_POST['password'];

		if(empty($id) || empty($password)){
			echo "null submission";

		}else{
			
			$file = fopen('registration.txt', 'r');
			$data = fread($file, filesize('registration.txt'));
			$user = explode('|', $data);

			$s=0;
			echo count($user1);
			while($s>(count($user1)+1){
				$data= $user1[$s];
				$user = explode('|', $data);
				echo $s;
				$s=$s-1;
			}

			//print_r($user);

			if(trim($user[0]) == $id && trim($user[1]) == $password){
				//$_SESSION['status']  = "Ok";
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}


?>
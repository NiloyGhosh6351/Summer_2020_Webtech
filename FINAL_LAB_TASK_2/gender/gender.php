<?php

	if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "please select a gender";
	}
	if (isset($_POST['gender'])) 
	{
		# code...
		echo $_POST['gender'];
	}
?>
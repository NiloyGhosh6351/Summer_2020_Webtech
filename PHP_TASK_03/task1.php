<?php

if (isset($_GET['submit'])) {
	$a=$_GET['email'];
	if ($a== "") {
		echo "Cannot be empty";
	}
	elseif (!filter_var($a,FILTER_VALIDATE_EMAIL)) {
		echo "Enter a valid email address";
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="GET">
	<h3>Email</h3>
	<input type="emali" name="email"><br>
	<br>
	<input type="submit" name="submit">
	</form>
</body>
</html>
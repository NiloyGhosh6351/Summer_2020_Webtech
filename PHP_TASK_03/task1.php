<?php

if (isset($_GET['email'])) {
	$a=$_GET['email'];
	if ($a=="") {
		echo "Cannot be empty";
	}
	else {
		echo $a;
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form >
		<h3>Email</h3>
		<input type="email" name="email" placeholder="sample@example.com"><br>
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
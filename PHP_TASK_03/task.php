<?php

if (isset($_GET['submit'])) {
	$a=$_GET['name'];
	if ($a== "") {
		echo "Cannot be empty";
	}
	elseif (strlen($a)) {
		echo "Enter at least two words";
	}
	elseif ($a[0]>='a' && $a[0]<='z' || $a[0]>='A' && $a[0]<='Z') {
		echo "Start with a letter";
	}
	elseif ($b>= 'a'&& $b<='z' || $b>= 'A'&& $b<='Z' || $b>='.' || $b>='-') {
		echo "Contain a-z or A-Z or dot(.) or dash(-)";
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
	<h3>Name</h3>
	<input type="text" name="name"><br>
	<br>
	<input type="submit" name="submit">
	</form>
</body>
</html>
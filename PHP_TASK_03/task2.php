<?php

if (isset($_GET['gender'])) {
	$a=$_GET['gender'];
	echo $a;
}
if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "please select a gender";
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>
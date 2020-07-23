<?php

if (isset($_GET['bd'])) {
	$a=$_GET['bd'];
	echo $a;
}
else
{
	
	if(isset($_GET['submit']))
	{
		echo "select a option ";
	}
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
			<h3>Blood Group</h3> 
				<select name="bd">
					<option>A+</option>
					<option>B+</option>
					<option>O+</option>
					<option>AB+</option>
				</select>
			<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>
<?php

if (isset($_GET['degree1']) || isset($_GET['degree2']) || isset($_GET['degree3'])) 
{
	$a=$_GET['degree1'];
	$b=$_GET['degree2'];
	$c=$_GET['degree3'];
	echo $a;
	echo $b;
	echo $c;
	
}
else
{
	if (isset($_GET['submit'])) {
		# code...
		echo "At least one of them has to be selected";
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
			<legend>Degree</legend>
			<input type="checkbox" name="degree1" value="SSC"> SSC
			<input type="checkbox" name="degree2" value="HSC"> HSC
			<input type="checkbox" name="degree3" value="BSc"> BSc<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>
<?php
$flag=true;
if(isset($_GET['text']))
{
	$a=(int)($_GET['text']);
	if ($a<=0) {
		# code...
		$flag=false;
	}
}
if (isset($_GET['file'])) {
	# code...
	$a=$_GET['file'];
	if ($a=="") {
		# code...
		$flag=false;
	}
}
if ($flag==false) {
	# code.
	echo "invalid";
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
			<legend>Profile Picture</legend>
			User Id<input type="text" name="text"><br>
			<br>
			Picture<input type="file" name="file"><br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>
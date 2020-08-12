<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend><b>Online Health Care System</b></legend>
		<center>
			Welcome<?php session_start(); echo " ".$_SESSION['username']?>
			<a href="logout.php"><u>Logout</a>
		</center>
		<hr>
		<center>
			<a href="donorlist.html"><u>Donor List</u></a>
		</center>
		<hr>
		<center>
			<a href="receiverlist.html"><u>Receiver List</u></a>
		</center>
		<hr>
		<center>
			<a href="covid19.html"><u>Covid 19</u></a>
		</center>
    </fieldset>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php session_start(); echo " ".$_SESSION['username']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>niloy@gmail.com</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>Male</td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td>19/09/1998</td>
			</tr>
		</table>	
        <hr/>
        <a href="home.php">Home</a>	
	</form>
</fieldset>
</body>
</html>
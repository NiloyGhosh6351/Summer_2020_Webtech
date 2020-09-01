<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post" onsubmit="return validate()">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username" onkeyup="removername()"></td>
					<td id="namemsg"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" onkeyup="removeremail()"></td>
					<td id="emailmsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password" onkeyup="removerpassword()"></td>
					<td id="passwordmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onkeyup="f1()"></td>
					<a href="login.php" style="display: none">login</a>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function f1()
		{
			document.getElementaByTagName('a')[0].style.display='inline';
		}
		function validate()
		{
			var validname=validatename();
			var validemail=validateemail();
			var validpasssword=validatepassword();
			if(validname==true && validemail==true && validpassword==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		//name
		function validatename()
		{
			var name=document.getElementById('username').value;
			if (name=="") 
			{
				document.getElementById('namemsg').innerHTML="UserName can not be empty";
				return false;
			}
			else
			{
				return true;
			}	
			function removername()
			{
				document.getElementById('namemsg').innerHTML="";
			}
		}
		//email
		function validateemail()
		{
			var email=document.getElementById('email').value;
			if (email=="") 
			{
				document.getElementById('emailmsg').innerHTML="Email can not be empty";
				return false;
			}
			else
			{
				return true;
			}	
		}

		function removeremail()
		{
			document.getElementById('emailmsg').innerHTML="";
		}
		//pass
		function validatepassword()
		{
			var password=document.getElementById('password').value;
			if (password=="") 
			{
				document.getElementById('passwordmsg').innerHTML="Password can not be empty";
				return false;
			}
			else
			{
				return true;
			}	
		}

		function removerpassword()
		{
			document.getElementById('passwordmsg').innerHTML="";
		}
	</script>
</body>
</html>
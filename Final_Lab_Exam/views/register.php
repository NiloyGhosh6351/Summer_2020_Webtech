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

	<form>
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username"></td>
					<td id="usernamemsg"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" onkeyup="f2()"></td>
					<td id="emailmsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
					<td id="passwordmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()"></td>
					<a href="login.php" style="display: none">login</a>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function f1() {
			var name=document.getElementById('username').value;
			var email=document.getElementById('email').value;
			var password=document.getElementById('password').value;
			
			var msg=document.getElementById('emailmsg').innerHTML;
			if(name!="" && email!="" && password!="" && msg!="Email Taken")
			{
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/regCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

			//alert('sf');
			xhttp.send('username='+name+'&password='+password+'&email='+email);
			
			

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200)
			{

				if(this.responseText != "")
				{
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}
				else
				{
					document.getElementById('emailmsg').innerHTML = "";
				}
				
			}	
			}
				document.getElementsByTagName('a')[0].style.display='inline';
			}
		}

		function f2()
		{
			var email = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+email);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailmsg').innerHTML = "";
				}
				
			}	
			}
		}

		
	</script>
</body>
</html>
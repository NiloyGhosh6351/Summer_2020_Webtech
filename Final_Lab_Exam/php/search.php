<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
</head>
<body>

		<h1 id="abc">Search Employee</h1>
		<a href="all_users.php">Back</a>
		<form>
			<input type="text" id="name" name="name" onkeyup="f1()" /> 
			<input type="button" id="button" name="button" value="Click" /> 
		</form>
		<div id="searchdata"></div>
		<script>
			function f1(){
				var name = document.getElementById('username').value;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../php/search.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('username='+username);
				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){
						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}
			}
		</script>
</body>
</html>
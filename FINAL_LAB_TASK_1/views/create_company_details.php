<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Company User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New Company Information</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profiledescription"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company Website</td>
					<td><input type="text" name="companywebsite"></td>
				</tr>
				<form action="fileupload.php" method="post">
					<tr>
					<td>Company Logo</td>
					<td><input type="file" name="companylogo"></td>
				</tr>
				</form>
				<tr>
					<td>User Account ID</td>
					<td><input type="text" name="useraccountid"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="createcompany" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
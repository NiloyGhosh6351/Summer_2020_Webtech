<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByIDcompany($_GET['id']);	
	}else{
		header('location: company_details.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Company User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Company Information</legend>
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
					<td><input type="text" name="companywebsite" value="www.example.com"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><input type="file" name="companylogo"></td>
				</tr>
				<tr>
					<td>User Account ID</td>
					<td><input type="text" name="useraccountid"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="editcompany" value="Update"> 
						<a href="company_details.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
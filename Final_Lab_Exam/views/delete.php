<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['type'])) {
		$user = getByID($_GET['type']);	
	}else{
		header('location: all_users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>AuthorName</td>
					<td><input type="text" name="authorname"></td>
				</tr>
				<tr>
					<td>ContactNumber</td>
					<td><input type="number" name="contactnumber"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="type" value="<?=$user['type']?>">
						<input type="submit" name="delete" value="Delete"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
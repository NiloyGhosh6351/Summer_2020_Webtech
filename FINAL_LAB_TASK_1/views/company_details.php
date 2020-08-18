<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Company Logo</td>
			<td>User Account ID</td>
			<td>Action</td>
		</tr>

		<?php  
			$usercompany = getAllUsercompany();
			for ($i=0; $i != count($usercompany); $i++) {  ?>
		<tr>
			<td><?=$usercompany[$i]['id']?></td>
			<td><?=$usercompany[$i]['company_name']?></td>
			<td><?=$usercompany[$i]['profile_description']?></td>
			<td><?=$usercompany[$i]['industry']?></td>
			<td><?=$usercompany[$i]['company_website']?></td>
			<td><?=$usercompany[$i]['company_logo']?></td>
			<td><?=$usercompany[$i]['user_account_id']?></td>
			<td>
				<a href="edit_company.php?id=<?=$usercompany[$i]['id']?>">Edit</a> |
				<a href="delete_company.php?id=<?=$usercompany[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>
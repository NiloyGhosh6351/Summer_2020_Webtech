<?php
//name
if (isset($_GET['name'])) {
	$a=$_GET['name'];
	
	if (strlen($a)>0) {
		# code...
		if (str_word_count($a)>1) {
			# code....
			//$a=range(a, z)
			//$a=range(A, Z)
			if(($a[0]>='a' && $a[0]<='z') || ($a[0]>='A' && $a[0]<='Z')){
				$b=strlen($a);
				while ($b<0) {
					# code...
					if ($a[$b]<'a' && $a[$b]!='' && $a[$b]!='.' && $a[$b]!='-') {
						# code...
						echo "invalid";
						break;
					}
					elseif ($a[$b]>'Z') {
						# code...
						if ($a[$b]<'a') {
							# code...
							echo "Invalid";
							break;
						}
						elseif ($a[$b]<'a') {
							# code...
							echo "Invalid";
							break;
						}
					}
					$b=$b-1;

				}
			}
			else{ echo "Please input a valid name";}
		}
		else{ echo "Please input a valid name";}
	}
	else{ echo "Please input a valid name";}

}


//email

if (isset($_GET['email'])) {
	$a=$_GET['email'];
	if ($a=="") {
		echo "Cannot be empty";
	}
	else {
		echo $a;
	}
}

//gender
if (isset($_GET['gender'])) {
	$a=$_GET['gender'];
	echo $a;
}
if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "select a gender";
	}


//Date of Birth
$flag=true;

if (isset($_GET['day'])) {
	# code...
	$a=(int)$_GET['day'];
	if (strlen($a)>0) {
		# code...
		if ($a>0 && $a<=31) {
			# code...
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}

if (isset($_GET['month'])) {
	# code...
	$a=(int)$_GET['month'];
	if (strlen($a)>0) {
		# code...
		if ($a>0 && $a<=12) {
			# code...
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}
if (isset($_GET['year'])) {
	# code...
	$a=(int)$_GET['year'];
	if (strlen($a)>0) {
		# code...
		if ($a>=1900 && $a<=2016) {
			# code...
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}
if ($flag==false) {
	# code.
	echo "invalid";
}

//Degree
if (isset($_GET['degree1']) || isset($_GET['degree2']) || isset($_GET['degree3']) || isset($_GET['degree4'])) 
{
	$a=$_GET['degree1'];
	$b=$_GET['degree2'];
	$c=$_GET['degree3'];
	$d=$_GET['degree4'];
	echo $a;
	echo $b;
	echo $c;
	echo $d;
	
}
else
{
	if (isset($_GET['submit'])) {
		# code...
		echo "At least one of them has to be selected";
	}
}

//Blood group

if (isset($_GET['bd'])) {
	$a=$_GET['bd'];
	echo $a;
}
else
{
	
	if(isset($_GET['submit']))
	{
		echo "select a option ";
	}
}

//choose file
$flag=true;
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
<html>
<head>
	<title></title>
</head>
<body>
	<form>

		<table align="center" width="30%" height="60%" border="2">
				<tr>
					<td colspan="3"> 
						<h3 align="center">PERSON PROFILE</h3>
					</td>
				</tr>
				<tr height="9%">
					<td> Name</td>
					<td>
						<input type="text" name="name">
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Email</td>
					<td>
						<input type="email" name="email">
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Gender</td>
					<td>
						<input type="radio" name="gender">  Male 
						<input type="radio" name="gender"> Female
						<input type="radio" name="gender"> Other
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Date of Birth</td>
					<td>
						<input type="text" size="1%" name="day">/<input type="text" size="1%" name="month">/<input type="text" size="2%" name="year"> (dd/mm/yyyy)
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Blood Group</td>
					<td>
						<select name="bd">
							<option>A+</option>
							<option>B+</option>
							<option>O+</option>
							<option>AB+</option>
						</select>
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Degree</td>
					<td>
						<input type="checkbox" name="degree1"> SSC 
						<input type="checkbox" name="degree2"> HSC 
						<input type="checkbox" name="degree3"> BSc. 
						<input type="checkbox" name="degree4"> MSc. 
					</td>
					<td width="6%"></td>
				</tr>
				<tr height="9%">
					<td> Photo</td>
					<td colspan="2">
						<input type="file" name="file"> 
					</td>
				</tr>
				<tr height="9%">
					<td colspan="3"></td>
				</tr>
				<tr height="9%">
					<td colspan="3" align="right">
						<input type="Submit" value="Submit" name="submit">
						<input type="Reset" value="Reset">
					</td>
			</table>
		</form>

</body>
</html>
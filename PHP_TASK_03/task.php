<?php

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



	/*if ($a== "") {
		echo "Cannot be empty";
	}
	elseif (strlen($a)) {
		echo "Enter at least two words";
	}
	elseif ($a[0]>='a' && $a[0]<='z' || $a[0]>='A' && $a[0]<='Z') {
		echo "Start with a letter";
	}
	elseif ($b>= 'a'&& $b<='z' || $b>= 'A'&& $b<='Z' || $b>='.' || $b>='-') {
		echo "Contain a-z or A-Z or dot(.) or dash(-)";
	}*/
}


?>



<html>
<head>
	<title></title>
</head>
<body>
	<form>
	<h3>Name</h3>
	<input type="text" name="name"><br>
	<br>
	<input type="submit" name="submit">
	</form>
</body>
</html>
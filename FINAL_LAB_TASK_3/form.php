<?php
	//name
	if (isset($_POST['submit']) && isset($_POST['gender']) && isset($_POST['bd'])) 
	{
		# code...
		echo $_POST['name'];
		echo $_POST['email'];
		echo $_POST['gender'];
		echo $_POST['day'];
		echo $_POST['month'];
		echo $_POST['year'];
		echo $_POST['bd'];
		if (isset($_POST['degree1'])) 
		{
			# code... 
			echo $_POST['degree1'];
		}
		if (isset($_POST['degree2'])) 
		{
			# code... 
			echo $_POST['degree2'];
		}
		if (isset($_POST['degree3'])) 
		{
			# code... 
			echo $_POST['degree3'];
		}
		if (isset($_POST['degree4'])) 
		{
			# code... 
			echo $_POST['degree4'];
		}
		echo "uploded";
	}

	//email
	/*if (isset($_POST['submit'])) 
	{
		# code...
		echo $_POST['email'];
	}

	//gender
	if(isset($_POST['submit']) && !isset($_POST['gender']))
	{
		echo "please select a gender";
	}
	if (isset($_POST['gender'])) 
	{
		# code...
		echo $_POST['gender'];
	}

	//date of birth
	if (isset($_POST['submit'])) 
	{
		# code...
		echo $_POST['day'];
		echo $_POST['month'];
		echo $_POST['year'];
	}

	//blood group
	if (isset($_POST['bd'])) 
	{
	 echo $_POST['bd'];
	}

	//degree
	if(isset($_POST['submit']))
{
	if (isset($_POST['degree1'])) 
	{
		# code... 
		echo $_POST['degree1'];
	}
	if (isset($_POST['degree2'])) 
	{
		# code... 
		echo $_POST['degree2'];
	}
	if (isset($_POST['degree3'])) 
	{
		# code... 
		echo $_POST['degree3'];
	}
}
	//profilepicture
	if (isset($_POST['submit'])) 
	{
	# code...
	echo "uploded";
	}
*/
?>
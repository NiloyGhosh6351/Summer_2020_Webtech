<?php

	if(isset($_POST['createcompany'])){

		//print_r($_FILES['myfile']);

		//$filedir = 'upload/'.$_FILES['myfile']['name'];
		$filedir = 'picture/'.time().'.jpg';

		if(move_uploaded_file($_FILES['companylogo']['tmp_name'], $filedir)){
			echo "Done";
		}else{
			echo "error";
		}
	}

?>
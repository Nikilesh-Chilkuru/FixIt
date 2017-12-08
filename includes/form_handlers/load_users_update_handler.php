<?php 
	//coding here
	require '../../config/config.php';
	
	$getUsers_query = mysqli_query($con, "SELECT * FROM  user");
	$output = array();

	while($user = mysqli_fetch_array($getUsers_query)){
	    array_push($output, ($user));
	}

	echo json_encode($output);
			
?>
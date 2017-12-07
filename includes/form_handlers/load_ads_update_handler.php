<?php 
	//coding here
	require '../../config/config.php';
	
	$getAds_query = mysqli_query($con, "SELECT * FROM  ads");
	$output = array();

	while($article = mysqli_fetch_array($getAds_query)){
	    array_push($output, ($article));
	}

	echo json_encode($output);
			
?>
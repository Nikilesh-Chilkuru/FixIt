<?php
	//coding here
	require '../../config/config.php';

	$getQueries_query = mysqli_query($con, "SELECT * FROM  query");
	$output = array();

	while($query = mysqli_fetch_array($getQueries_query)){
	    array_push($output, ($query));
	}

	echo json_encode($output);

?>

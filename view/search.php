<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$values = select('vehicle_no','bus_details','',$conn);
	foreach ($values as $value){
		$final[] = $value['vehicle_no'];
	}
	echo json_encode($final);
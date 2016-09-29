<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$searchTerm = $_GET['term'];
	$values = select('vehicle_no','bus_details','vehicle_no LIKE "%'.$searchTerm.'%"',$conn);
	foreach ($values as $value){
		$final[] = $value['vehicle_no'];
	}
	echo json_encode($final);

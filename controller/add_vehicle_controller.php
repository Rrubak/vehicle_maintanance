<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	if(insert('bus_details',$_POST,$conn)){
		header("Location:../view/add_vehicle.php?status=inserted");
	}else{
		header("Location:../view/add_vehicle.php?status=notinserted");
	}

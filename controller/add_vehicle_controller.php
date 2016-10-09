<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	if(insert('bus_details',$_POST,$conn) == "inserted"){
		header("Location:../view/add_vehicle.php?status=inserted");
	}else{
		header("Location:../view/add_vehicle.php?status=notinserted");
	}

<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$searchTerm = $_GET['term'];
	$values = select('*','catagory','catagory_name LIKE "%'.$searchTerm.'%"',$conn);
	foreach ($values as $value){
		$final[] = $value['catagory_name'];
	}
	echo json_encode($final);

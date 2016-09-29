<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	if(insert('catagory', $_POST, $conn)=="error"){
		header('location: ../view/add_catagory.php?status=error');
	} else{
		header('location: ../view/add_catagory.php?status=inserted');
	}
	function get_total_catagory()
	{
		$conn=db_connect();
		return select("*","catagory","",$conn);
	}
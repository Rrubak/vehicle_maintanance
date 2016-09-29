<?php 
	include_once '../model/db.php';
	
	if(insert('catagories', 'catagory_name', $_POST, $con)=="error"){
		header('location: ../view/add_catagory.php?status=error');
	} else{
		header('location: ../view/add_catagory.php?status=inserted');
	}
	function get_total_catagory()
	{
		$conn=db_connect();
		return select("*","catagories","",$conn);
	}
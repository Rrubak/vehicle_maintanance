<?php 
	include_once '../model/db.php';

	function get_total_catagory()
	{
		$conn=db_connect();
		return select("*","catagory","",$conn);
	}
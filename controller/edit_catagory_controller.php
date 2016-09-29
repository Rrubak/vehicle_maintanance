<?php
	include_once '../model/db.php';
	function get_catagory($id){
		$conn = db_connect();
		return select("*","catagory","id=$id",$conn);
	}
	?>
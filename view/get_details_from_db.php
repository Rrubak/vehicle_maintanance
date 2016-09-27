<?php 

	print_r($_POST);
	$conn = db_connect();
	select('',$_POST,$conn);
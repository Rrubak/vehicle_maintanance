<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$catagory_id = select('id','catagory',array('catagory_name' =>$_POST['catagory']),$conn);
	$column_names_and_values = array('vehicle_id' => $_SESSION['id'] , 'catagory_id' => $catagory_id['0']['id'] , 'cost' => $_POST['cost'],'date_of_entry' => $_POST['date_of_entry']);
	$values = insert('expenditure',$column_names_and_values,$conn);
	print_r($values);
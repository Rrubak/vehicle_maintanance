<?php 
	include_once '../model/db.php';
	
	$conn = db_connect();
	$username = sanitize($_POST['username'], $conn);
	$password = sanitize($_POST['password'], $conn);
	$id = check($username, $password);
	print_r($id);
	if(!emptty($id)){
		if(create_admin_session($id)){
			header('Location: ../view/home.php');
		} else{
			header('Location: ../view/login.php?type=login_error');
		}
	}else{
		header('Location: ../view/login.php?type=login_error');
	}

	function check($username, $password){
		if($username == "rubak" && $password == "ezrubak"){
			$data['name'] = "rubak";
			$data['company'] = "Vefetch Technologies";
			return $data; 
		}else{
			return null;
		}
	}

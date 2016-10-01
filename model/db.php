<?php 
	
	include_once 'curd_operations.php';
	session_start();
	function db_connect(){
		$connection = mysqli_connect("localhost", "root", "", "vehicle_monitoring");
		if (!$connection) {
			die("Connection failed: " . mysqli_connect_error());
			exit();
		}
		else{
			// echo "Connected";
		}
		return $connection;
	}

	function sms_db_connect(){
		$connection = mysqli_connect('10.0.2.1', "smpp", "smpp1234", "smpp", 3306);
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}

	function execute_query($query, $link){
		if(!empty($link)){
			return mysqli_query($link, $query);
		}else{
			return mysqli_query(db_connect(), $query);
		}
	}

	function get_array_from_object($result){
		return mysqli_fetch_array($result, MYSQLI_ASSOC);
	}

	function sanitize($input, $con){
		return mysqli_real_escape_string($con, $input);
	}
	function is__array($value){
		return is_array($value);
	}

	function emptty($value){
		return empty($value);
	}

	function login_page_admin_session_check(){
		if(isset($_SESSION["adminDetails"])){
			header('location:home.php');
		}
	}
	function create_admin_session($data){
	$_SESSION["adminDetails"] = $data;
	if(isset($_SESSION['adminDetails'])){
		return true;
	}
	return false;
	}

	function log_out(){
		session_destroy();   
	}
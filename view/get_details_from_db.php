<?php 
	session_start();
	// print_r($_POST);
	include_once '../model/db.php';
	$conn = db_connect();
	// print_r($_SESSION['id']);
	
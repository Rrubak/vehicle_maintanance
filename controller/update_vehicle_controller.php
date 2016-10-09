<?php 
	include_once '../view/header.php'; 
	$conn = db_connect();
	$condition = "`id` = '".$_POST['id']."'";
	$values = update($_POST, '`bus_details`', $condition, $conn);
	if($values == "updated"){
		header("Location:../view/update_vehicles.php?status=inserted");
	}else{
		header("Location:../view/update_vehicles.php?status=notinserted");
	}
?>
<?php include_once '../view/footer.php'; ?>
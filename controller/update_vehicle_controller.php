<?php 
	include_once '../view/header.php'; 
	$conn = db_connect();
	$condition = "`id` = '".$_POST['id']."'";
	$values = update($_POST, '`bus_details`', $condition, $conn);
	if($values == "updated"){
		header("Location:../view/add_vehicle.php?status=inserted");
	}else{
		header("Location:../view/add_vehicle.php?status=notinserted");
	}
?>
<?php include_once '../view/footer.php'; ?>
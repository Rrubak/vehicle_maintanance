<?php 
	include_once 'header.php';
	if (isset($_GET['response'])) {
		if ($_GET['response'] =="notinserted"){
			echo '<div class="alert alert-danger"><strong>Some problem occured!</strong> Not Updated.</div>';
		}else{
			echo '<div class="alert alert-success"><strong>Vehicle Updated!</strong> </div>';
		}
	}
?>	
	<form action ="update_vehicle_controller.php" method="post" >
	<h1>Enter Vehicle Number</h1>
	<input type="text" name="vehicle_name" id="find_vehicle" minlength="9" maxlength="18" class="form-control" autocomplete="on" placeholder="Search Vehicle" required autofocus >
	<div id="div"></div>
	<input type="Submit" style="width: 90px;text-align: center;background-color: gray;float: right;" class="form-control" value="Search">
	</form>
	<br>
	<br>
	<table class="table table-hover">
	<thead>
	<tr>
		<th><strong>S.No</strong></th>
		<th><strong>Vehicle Name</strong></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$html_content = "";
	$conn = db_connect();
	$i = 1;
	$vehicles = select('`vehicle_no`','`bus_details`','',$conn);
	foreach ( $vehicles as  $value) {
	$html_content = $html_content."<tr><td>".$i."</td><td>".$value['vehicle_no']."</td>";
	$i++;
	}
	echo $html_content;
	?>

	</tbody>
	</table>
	
<?php include_once 'footer.php'; ?>

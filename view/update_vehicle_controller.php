<?php 
	include_once '../view/header.php';
	$conn = db_connect();
	$condition = "`vehicle_no` = '".$_POST['vehicle_name']."'";
	$values = select('*', '`bus_details`', $condition, $conn);
	// print_r($values);
	if (isset($_GET['response'])) {
		if ($_GET['response'] =="notinserted"){
			echo '<div class="alert alert-danger"><strong>Some problem occured!</strong> Not Updated.</div>';
		}else{
			echo '<div class="alert alert-success"><strong>Vehicle Updated!</strong> </div>';
		}
	}
?>	
	<form action="../controller/update_vehicle_controller.php" method="post"> 
	<table class="table" style="width:44%;">
			<tr>
				<td>
					<p>Bus No : </p>
				</td>
				<td>
					<input type="text" name="vehicle_no" id="vehicle_no" pattern="[A-Z0-9a-z]{1,20}" minlength="9" maxlength="18" class="form-control" placeholder="Vehicle No" value="<?php echo $values[0]['vehicle_no']; ?>"  required autofocus><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Permit : </p>
				</td>
				<td>
					<input type="date" name="permit" id="permit" class="form-control" value="<?php echo $values[0]['permit']; ?>" placeholder="Permit"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Insurance : </p>
				</td>
				<td>
					<input type="date" name="insurance" id="insurance" class="form-control" value="<?php echo $values[0]['insurance']; ?>" placeholder="Insurance"  required><br/>
				</td>
			</tr><tr>
				<td>
					<p>Tax : </p>
				</td>
				<td>
					<input type="date" name="tax" id="tax" class="form-control" value="<?php echo $values[0]['tax']; ?>" placeholder="Tax"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Make : </p>
				</td>
				<td>
					<input type="date" name="make" id="make" class="form-control" value="<?php echo $values[0]['make']; ?>"" placeholder="Make"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Model : </p>
				</td>
				<td>
					<input type="text" name="model" id="model" pattern="[A-Z0-9a-z]{1,20}" value="<?php echo $values[0]['model']; ?>"" maxlength="20" class="form-control" placeholder="Model"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Engine No : </p>
				</td>
				<td>
					<input type="text" name="engine_no" id="engine_no" pattern="[A-Z0-9a-z]{1,20}" value="<?php echo $values[0]['engine_no']; ?>" maxlength="20" class="form-control" placeholder="Engine No"  required s><br/>
					<div id="alert"></div>
				</td>
			</tr>
			<tr>
				<td>
					<p>Chass No : </p>
				</td>
				<td>
					<input type="text" name="chass_no" pattern="[A-Z0-9a-z]{1,20}" id="chass_no" value="<?php echo $values[0]['chass_no']; ?>" maxlength="20" class="form-control" placeholder="Chass No"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Available Seats : </p>
				</td>
				<td>
					<input type="number" name="no_of_seats" id="no_of_seats" value="<?php echo $values[0]['no_of_seats']; ?>" maxlength="3" class="form-control" placeholder="Available Seats"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" id="submit" class="form-control" value="Update vehicle"  ><br/>
				</td>
			</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $values[0]['id']; ?>"">
</form>
<?php include_once '../view/footer.php'; ?>

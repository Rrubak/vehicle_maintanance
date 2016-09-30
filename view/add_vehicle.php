<?php 
	include_once 'header.php'; 
	if (isset($_GET['status'])) {
		if ($_GET['status'] =="notinserted"){
			echo '<div class="alert alert-danger"><strong>Some problem occured!</strong> Not Updated.</div>';
		}	
	}
	
	?>
<form action="../controller/add_vehicle_controller.php" method="post"> 
	<table class="table" style="width:44%;">
			<tr>
				<td>
					<p>Bus No :- </p>
				</td>
				<td>
					<input type="text" name="vehicle_no" id="vehicle_no" maxlength="15" class="form-control" placeholder="Vehicle No"  required autofocus><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Permit :- </p>
				</td>
				<td>
					<input type="date" name="permit" id="permit" class="form-control" placeholder="Permit"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Insurance :- </p>
				</td>
				<td>
					<input type="date" name="insurance" id="insurance" class="form-control" placeholder="Insurance"  required><br/>
				</td>
			</tr><tr>
				<td>
					<p>Tax :- </p>
				</td>
				<td>
					<input type="date" name="tax" id="tax" class="form-control" placeholder="Tax"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Make :- </p>
				</td>
				<td>
					<input type="date" name="make" id="make" class="form-control" placeholder="Make"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Model :- </p>
				</td>
				<td>
					<input type="number" name="model" id="model" maxlength="20" class="form-control" placeholder="Model"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Engine No :- </p>
				</td>
				<td>
					<input type="number" name="engine_no" id="engine_no" maxlength="20" class="form-control" placeholder="Engine No"  required s><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Chass No :- </p>
				</td>
				<td>
					<input type="number" name="chass_no" id="chass_no" maxlength="20" class="form-control" placeholder="Chass No"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
					<p>Available Seats :- </p>
				</td>
				<td>
					<input type="number" name="no_of_seats" id="no_of_seats" maxlength="3" class="form-control" placeholder="Available Seats"  required><br/>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" id="submit" class="form-control" value="Add vehicle"  ><br/>
				</td>
			</tr>
	</table>
</form>
<?php include_once 'footer.php'; ?>
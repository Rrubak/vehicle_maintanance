<?php 
	include_once 'header.php'; 
	include_once 'get_vehicle_details.php';
?>
<h1>Monitor Vechicle</h1><hr>
	<table class="table">
		<tr>
			<td>
				Start Date
			</td>
			<td>
				End Date
			</td>
		</tr>
		<tr>
			<td>
				<input type="date" name="start_date" id="start_date" class="form-control">
			</td>
			<td>
				<input type="date" name="end_date" id="end_date" class="form-control">
			</td>
			<td>
				<input type="submit" value="Get details" id="submit" class="form-control">
			</td>
		</tr>
	</table>
<?php include_once 'footer.php'; ?>

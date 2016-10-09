<?php include_once 'header.php';?>	
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

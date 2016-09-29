<?php 
	include_once 'header.php';
	if(isset($_GET['response'])){
		$response = $_GET['response'];
		if ($response == 'inserted') {
			echo '<div class="alert alert-success"><strong>Success!</strong>Expenditure added successfully.</div>';
		}else if ($response == 'notinserted') {
			echo '<div class="alert alert-warning"><strong>Sorry!</strong> Catagory name already present or Something went wrongly.</div>';
		}
	}
?>
	<input type="text" name="search_vehicle" id="search_vehicle" class="form-control" autocomplete="on" placeholder="Search Vehicle" required autofocus >
	<div id="div"></div>
<?php include_once 'footer.php'; ?>

<?php include_once 'header.php'; ?>
	<div class="home_header">
		<h1>Add Category</h1>
		<br>
		<?php
			if(isset($_GET['status'])){
			$status = $_GET['status'];
			}else{
			$status = "";
			}
			switch ($status) {
			case 'inserted':
			echo '<div class="alert alert-success"><strong>Success!</strong> New catagory added successfully.</div>';
			break;

			case 'error':
			echo '<div class="alert alert-warning"><strong>Sorry!</strong> Catagory name already present or Something went wrongly.</div>';
			break;
			default:
			echo "";
			break;
			}

		?>
		<form method="post" action="../controller/add_catagory.php">
			<input type="textbox" name="catagory_name" pattern="[A-Za-z]{1,30}" maxlength="30" class="form-control" placeholder="Category Name" required autofocus><br/>
		</form>
		<hr style="border-top: 1px solid #191616">
	</div>
	<div class="home_content">
		<?php
			include_once '../controller/add_catagory_controller.php';
			$total_catagories = get_total_catagory();
			if($total_catagories != "empty"){
		?>
		<table class="table table-hover">
		<thead>
		<tr>
		<th><strong>S.No</strong></th>
		<th><strong>CategoryName</strong></th>
		<th><strong>Options</strong></th>
		</tr>
		</thead>
		<tbody>
		<?php
			$html_content = "";
			foreach ( $total_catagories as $key => $total_catagory) {
			$html_content = $html_content."<tr><td>".++$key."</td><td>".$total_catagory['catagory_name']."</td><td><a href='edit_catagory.php?id=".$total_catagory['id']."'>Edit</a> <a href='../controller/delete_catagory.php?id=".$total_catagory['id']."'>Delete</a></tr>";
			}
			echo $html_content;
			?>

			</tbody>
			</table>
			<?php }else{
			echo "please add some catagory";
			}
		?>

	</div>
<?php include_once 'footer.php'; ?>

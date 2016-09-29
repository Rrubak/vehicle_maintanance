<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Update Catagory</h1>
	<br>
	 <?php
          if(isset($_GET['id'])){
            include_once '../controller/edit_catagory_controller.php';
            $id = $_GET['id'];
            $catagory_details = get_catagory($id);
          }
          else{
            $id = "";
          }
          ?>
	<hr style="border-top: 1px solid #191616">
	<body>
	</div>
	<form method="post" action="../controller/edit_catagory.php">
	     <input type="hidden" name="id" value="<?php echo $catagory_details[0]['id']; ?> ">
    	<input type="textbox" name="catagory_name" class="form-control" placeholder="Catagory Name" value = "<?php echo $catagory_details['0']['catagory_name'] ?>"  required autofocus><br/>
    	 <button type="submit" class="btn btn-success" style="width: 208px;">update</button>
    </form>
</div>
<?php include_once 'footer.php'; ?>
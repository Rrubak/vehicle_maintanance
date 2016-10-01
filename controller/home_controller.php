<?php
	include_once '../model/db.php';	
	$conn = db_connect();
	$date = date("Y-m-d");
	$id = select('`id`','bus_details', array('vehicle_no' => $_GET['vehicle_no']), $conn);
	if($id=="empty"){
		echo "<br/>sorry no data presents &#128533;";
	}else{
		$_SESSION['id'] = $id['0']['id'];
		$column_names = ' `vehicle_no`, `permit`, `insurance`, `tax`, `make`, `model`, `engine_no`, `chass_no`, `no_of_seats`';
		$vehicle_details = select($column_names,'bus_details', array('vehicle_no' => $_GET['vehicle_no']), $conn);	
		$current_vehicle = $vehicle_details[0];
	  	$final_content = '<div id="tabs">
						<input type="radio" name="tabs" id="toggle-tab1" checked="checked" />
						<label for="toggle-tab1">Vehicle Details</label>

	  					<input type="radio" name="tabs" id="toggle-tab2" />
	  					<label for="toggle-tab2">Add Expenditure Details</label>

	  					<input type="radio" name="tabs" id="toggle-tab3" />
	  					<label for="toggle-tab3">Expenditure Details</label>
	  
	  					<div id="tab1" class="tab"><table class="table">';
	  	 $title = array('1' =>"Vehicle No" ,'2' =>"Permit" ,'3' =>"Insurance" ,'4' =>"Tax" ,'5' =>"Make" ,'6' =>"Model" ,'7' =>"Engine No" ,'8' =>"Chass No" ,'9' =>"Available Seats" );
	  	 $i = 1;
	  	foreach ($current_vehicle as $key => $value) {
	  		$value = explode("-", $value);
	  		if(count($value) == 1){
	  			$final_value = $value[0];
	  		}else{
	  			$final_value = $value[2]."-".$value[1]."-".$value[0];
	  		}
	  		$final_content = $final_content.'<tr><td>'.$title[$i].'</td><td>'.$final_value.'</td></tr>';
	  		$i++;
		}
		$catagory_options = get_catagory_options();
		$total_html="";
		foreach ($catagory_options as $key => $catagory_option) {
			$total_html = $total_html."<option>".$catagory_option['catagory_name']."</option>";
		}
	  	$final_content = $final_content.'</table></div>

	  			<div id="tab2" class="tab">
	  				<form id="form1">
						<table class="table" style="width:44%;">
							<tr>
							<td>
							<p><strong>Categeory: </strong></p>
							</td>
							<td>
								<select name="catagory" placeholder="Category" class="form-control" id="catagory" required>
									'.$total_html.'
								</select>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Cost : </strong></p>
							</td>
							<td>
							<input type="number" name="cost" id="cost" pattern="[0-9]{1,15}" min="1" class="form-control" placeholder="Cost"  required><br/>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Date of Entry :</strong> </p>
							</td>
							<td>
							<input type="date" name="date_of_entry" id="date_of_entry" class="form-control" value="'.$date.'" placeholder="Date of entry"  required><br/>
							</td>
							</tr>
							<tr>
							<td>
							</td>
							<td>
							<input type="submit"  id="add_expenditure" class="form-control" value="Add"><br/>
							</td>
							</tr>
						</table>
					</form>
	  			</div>

	  			<div id="tab3" class="tab">
					<table class="table">
						<tr>
							<td><strong>
							Start Date
							</td></strong>
							<td><strong>
							End Date
							</td></strong>
						</tr>
						<tr>
							<td>
							<input type="date" name="start_date" id="start_date" value="'.$date.'"  class="form-control">
							</td>
							<td>
							<input type="date" name="end_date" id="end_date" value="'.$date.'"  class="form-control">
							</td>
							<td>
							<input type="submit" value="Get details" id="get_expenditure_details" class="form-control">
							</td>
						</tr>
					</table>
	  				<div id="my_content">
	  			</div>
	  			</div>
	  			</div>';
  		echo $final_content;
	}
	

  	function get_catagory_options(){
  		$conn = db_connect();
		$catagory_options = select("catagory_name","catagory","",$conn);
		return $catagory_options;
  	}

	function validateDate($date, $format = 'Y-m-d H:i:s') {
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}

<?php
	session_start(); 
	include_once '../model/db.php';	
	$conn = db_connect();
	$id = select('`id`','bus_details', array('vehicle_no' => $_GET['vehicle_no']), $conn);
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
  		$final_content = $final_content.'<tr><td>'.$title[$i].'</td><td>'.$value.'</td></tr>';
  		$i++;
	}
  	$final_content = $final_content.'</table></div>

  			<div id="tab2" class="tab">
				<table class="table" style="width:44%;">
					<tr>
					<td>
					<p>Categeory:- </p>
					</td>
					<td>
					<input type="text" name="catagory" id="categeory" class="form-control" placeholder="categeory"  required autofocus><br/>
					</td>
					</tr>
					<tr>
					<td>
					<p>Cost :- </p>
					</td>
					<td>
					<input type="number" name="cost" id="cost" class="form-control" placeholder="Cost"  required><br/>
					</td>
					</tr>
					<tr>
					<td>
					<p>Date of entry :- </p>
					</td>
					<td>
					<input type="date" name="date_of_entry" id="date_of_entry" class="form-control" placeholder="Date of entry"  required><br/>
					</td>
					</tr>
				</table>
  			</div>

  			<div id="tab3" class="tab">
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
						<input type="submit" value="Get details" id="get_expenditure_details" class="form-control">
						</td>
					</tr>
				</table>
  			</div>
  			<div id="my_content">
  			</div>
  			</div>';
  	echo $final_content;

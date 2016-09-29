<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$where = "`date_of_entry` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'";
	$final = select('*', '`expenditure`', $where, $conn);
	if($final != "empty"){
		$f_val = "";
		$total_amount = 0;
		foreach ($final as $final_data) {  
			$f_val = $f_val.'<tr>
			<td>'.$final_data['date_of_entry'].'</td>
			<td>'.get_catagory_name($final_data['catagory_id'] , $conn).'</td>
			<td>'.$final_data['cost'].'</td></tr>';
			$total_amount = $total_amount+$final_data['cost'];
		}
		$f_val = "<table class='table'><tr><td>Date</td><td>Expance For</td><td>Amount</td></tr>".$f_val . '<tr><td></td><td>Total Amount :-</td><td>'.$total_amount.'</td></table>';

		echo $f_val;
	}
	else{
		echo "<tr><td>No data found</td></tr>";
	}

	function get_catagory_name($id ,$conn){
		$condition = '`id`='.$id;
		$final_cat_name = select('catagory_name','catagory', $condition, $conn);
		return $final_cat_name[0]['catagory_name'];
	} 
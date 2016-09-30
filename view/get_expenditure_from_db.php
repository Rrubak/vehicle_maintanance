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
			<td>'.change_date_formet($final_data['date_of_entry']).'</td>
			<td>'.get_catagory_name($final_data['catagory_id'] , $conn).'</td>
			<td>'.$final_data['cost'].'</td></tr>';
			$total_amount = $total_amount+$final_data['cost'];
		}
		$f_val = "<table class='table'><tr><td><b>Date</b></td><td><b>Expense For</b></td><td><b>Amount</b></td></tr>".$f_val . '<tr><td></td><td><strong>Total Amount :</strong></td><td>'.$total_amount.'</td></table>';

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

	function change_date_formet($date){
		$splited_old_date = explode("-", $date);
		$new_date = $splited_old_date[2]."-".$splited_old_date[1]."-".$splited_old_date[0];
		return $new_date;
	}
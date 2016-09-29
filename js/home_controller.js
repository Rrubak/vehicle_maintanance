$(document).ready(function(){
	$( "#search_vehicle" ).autocomplete({
		source: '../view/search.php'
	});
	$('#search_vehicle').keypress(function(e){
		vehicle_no = document.getElementById('search_vehicle').value;
        if(e.which == 13){
           	$.ajax({
				type : "GET",
				url : "../controller/home_controller.php",
				data : {vehicle_no : vehicle_no},
				success: function(data){
					document.getElementById('div').innerHTML = data ;
				}
			});
        }
	});
		$('body').on('click', "#get_expenditure_details", function(){
			start_date = document.getElementById('start_date').value;
			end_date = document.getElementById('end_date').value;
			$.ajax({
				type : "POST",
				url : "../view/get_details_from_db.php",
				data : {start_date : start_date ,end_date :end_date},
				success: function(data){
					console.log(data);
				}
			});
		});
});
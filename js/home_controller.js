$(document).ready(function(){
	$( "#search_vehicle" ).autocomplete({
		source: '../view/search.php'
	});
	$('#search_vehicle').keypress(function(e){
		vehicle_no = document.getElementById('search_vehicle').value;
        if(e.which == 13){
        	$("#form").submit();
        }
        	$("#form").submit(function(e){
			e.preventDefault();
			if (vehicle_no.length >= 9) {
				$.ajax({
					type : "GET",
					url : "../controller/home_controller.php",
					data : {vehicle_no : vehicle_no},
					success: function(data){
						document.getElementById('div').innerHTML = data ;
					}
				});
			}else{
				document.getElementById('div').innerHTML = "<br>Sorry,You have made a mistake on Vehicle No" ;
			}
	});
	});

	$('body').on('click', "#get_expenditure_details", function(){
		start_date = document.getElementById('start_date').value;
		end_date = document.getElementById('end_date').value;
		$.ajax({
			type : "POST",
			url : "../view/get_expenditure_from_db.php",
			data : {start_date : start_date ,end_date :end_date},
			success: function(data){
				document.getElementById('my_content').innerHTML = data ;
			}
		});
	});
	$('body').on('click', "#add_expenditure", function(){
		$("#form1").submit(function(e){
			e.preventDefault();
			catagory = document.getElementById('catagory').value;
			cost = document.getElementById('cost').value;
			date_of_entry =document.getElementById('date_of_entry').value;
			$.ajax({
				type : "POST",
				url : "../controller/add_expenditure_to_db.php",
				data : {catagory : catagory , cost :cost, date_of_entry : date_of_entry },
				success: function(data){
					if (data =="inserted") {
						 document.getElementById('response').innerHTML = '<div class="alert alert-success"><strong>Success!</strong>Expenditure added successfully.</div>';
					}else{
						 document.getElementById('response').innerHTML = '<div class="alert alert-warning"><strong>Sorry!</strong> Catagory name already present or Something went wrongly.</div>';
					}
				}
			});
			setTimeout( function(){ 
				document.getElementById('response').innerHTML ="";
			}  , 1000 );
		});
	});
});
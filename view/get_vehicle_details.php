<script type="text/javascript">
	$(document).ready(function(){
		$('body').on('click', "#submit", function(){
			start_date = document.getElementById('start_date').value;
			end_date = document.getElementById('end_date').value;
			alert(start_date+" "+end_date);
			$.ajax({
				type : "POST",
				url : "get_details_from_db.php",
				data : {start_date : start_date ,end_date :end_date},
				success: function(data){
					console.log(data);
				}
			});
		});
	});
</script>
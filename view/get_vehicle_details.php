<script type="text/javascript">
	$(document).ready(function(){
		$('body').on('click', "#submit", function(){
			start_date = document.getElementById('start_date').value;
			end_date = document.getElementById('end_date').value;
			alert(start_date+" "+end_date);
		});
	});
</script>
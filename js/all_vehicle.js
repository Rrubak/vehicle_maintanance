$(document).ready(function(){
	$( "#find_vehicle" ).autocomplete({
		source: '../view/search.php'
	});
});
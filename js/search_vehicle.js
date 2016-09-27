$(document).ready(function(){
	$(function() {
		$( "#search_vehicle" ).autocomplete({
			source: '../view/search.php'
		});
	});
});
$(document).ready(function() {
	$('#search').on('change',function() {
		$(this).parents('form').submit();
	});
});
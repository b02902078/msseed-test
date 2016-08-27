$(document).ready(function(){
	$('[data-toggle="popover"]').popover({container: 'body', html: true, selector: "body", padding: 0}).click(function(e) { 
		e.preventDefault(); 
		$(this).focus(); 
	});
});
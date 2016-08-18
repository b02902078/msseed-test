var main = function(){
	$('.modal .btn-danger').click(function(){
		// Get resource name
		var data = { component: $(this).parent().closest('.modal').attr('id') };

		// Update team resource
		$.post("composeResource.php", data)
		.done(function( result ) {
			if (result) { 
				// alert success 
			}
			else {
				// alert failure
			}
		});
	});
};

$(document).ready(main);
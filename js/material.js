var main = function(){
	$('.modal .btn-components').click(function(){
		// Get resource name
		var data = { component: $(this).parent().closest('.modal').attr('id'), trans_type: 'none' };

		// Update team resource
		$.post("composeResource.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert("合成成功！");
				location.reload(true);
			}
			else {
				alert("請確認原料數量後再試一次！");
			}
		});
	});

	$('.modal .btn-transport').click(function(){
		// Get resource name
		var data = { component: 'transportation', trans_type: $(this).parent().closest('.modal').attr('id') };

		// Update team resource
		$.post("composeResource.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert("合成成功！");
				location.reload(true);
			}
			else {
				alert("請確認原料數量後再試一次！");
			}
		});
	});
};

$(document).ready(main);
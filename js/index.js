var main = function(){

	$('#btn-change-pwd').click(function(){
		// Get Password
		var data = { pwd1: $('#pwd1').val(), pwd2: $('#pwd2').val() };
		// Update team resource
		$.post("backend/login/changePassword.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert(result);
			}
			else {
				alert("合成失敗，請確認原料數量後再試一次！ (" + result + ")");
			}
		});
	});

};

$(document).ready(main);
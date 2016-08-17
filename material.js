var main = function(){
    $('.modal .btn-danger').click(function(){
        var data = { component: $(this).parent().closest('.modal').attr('id') };

        /*$.post("composeResource.php", data)
        .done(function( result ) {
    alert( "Data Loaded: " + result );
  });*/
  	$.ajax({
    type: 'POST',
    url: 'composeResource.php',
    data: { component: $(this).parent().closest('.modal').attr('id') }
    success: function(data){
       alert(data);
    },
  });
    });
};

$(document).ready(main);
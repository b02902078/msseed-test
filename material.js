var main = function(){
    $('.modal .btn-danger').click(function(){
        var data = { component: $(this).parent().closest('.modal').attr('id') };

        alert( "Data Loaded: " + data.component );
        /*$.post("composeResource.php", data)
        .done(function( result ) {
    alert( "Data Loaded: " + result );
  });*/
    });
};

$(document).ready(main);
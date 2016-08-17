var main = function(){
    $('.modal .btn-danger').click(function(){
        var data = {'component': $(this).parent().closest('.modal').attr('id')};
        $.post('composeResource.php', data)
        .done(function( result ) {
    var content = $( result ).find( "#content" );
    $( "#result" ).empty().append( content );
  });
    });
};

$(document).ready(main);
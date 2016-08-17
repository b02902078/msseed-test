var main = function(){
    $('.modal .btn-danger').click(function(){
        var data = {'component': $(this).parent().closest('.modal').attr('id')};
        $.post('composeResource.php', data);
    });
};

$(document).ready(main);
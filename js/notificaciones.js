$(document).ready(function () {

    //lenarDatosModal

    $('#btnBorrarTodas').click(function () {

        
        var usuario =$('#idUserNoti').val();

        $.ajax({
            url: 'borrarTodasNotificaciones.php',
            type: 'post',
            data: {
                usuario: usuario
            },
            dataType: 'json',
            success: function (response) {


                for(i=1; i<=100;i++)
                {
                    $('#module'+i).fadeToggle();
                }
                $('#btnBorrarTodas').hide();
                $('#mensajeSinNotificaciones').show();

            }
        });

    });


    $('.nots_section .module .close').click(function () {
        $(this).parent('.module').fadeToggle();
      });







});


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
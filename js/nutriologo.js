$(document).ready(function () {

    //lenarDatosModal

    $('#btnGuardarNutriologo').click(function () {

        var nombre = $('#nombre').val();
        var idNutriologo = $('#idNutriologo').val();
        var apellidos = $('#apellidos').val();
        var telefono = $('#telefono').val();
        var telOficina = $('#telOficina').val();
        var edad = $('#edad').val();
        var cedula = $('#cedula').val();
        var email = $('#email').val();
        var password = $('#password').val();
        

        $.ajax({
            url: 'actualizarNutriologo.php',
            type: 'post',
            data: {
                nombre: nombre,
                idNutriologo: idNutriologo,
                apellidos: apellidos,
                telefono: telefono,
                telOficina: telOficina,
                edad: edad,
                cedula: cedula,
                email: email,
                password: password


            },
            dataType: 'json',
            success: function (response) {


                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Nutriologo actualizado con éxito').end().modal({
                    fadeDuration: 200,
                    fadeDelay: 1.75
                });

                window.location='profile.php';

            },
            error: function (request, status, error) {
                if (request.responseText === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Nutriologo actualizado con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                    window.location='profile.php';
                }
            }
        });

    });


    $('#userImageUpload').change(function () {
        $('#formImagen').submit();
    });


                


});


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
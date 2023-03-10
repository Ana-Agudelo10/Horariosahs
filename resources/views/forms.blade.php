<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/build/assets/estilos_forms.css')}}">
    <link rel="icon" href="{{asset('/build/imgs/Logo.png')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('cuerpo')
</body>
</html>

<script>
    $(document).ready(function(){

$('#btnSend').click(function(){

    var errores = '';

    // Validado Nombre ==============================
    if( $('#names').val() == '' ){
        errores += '<p>Escriba un nombre</p>';
        $('#names').css("border-bottom-color", "#F14B4B")
    } else{
        $('#names').css("border-bottom-color", "#d1d1d1")
    }

    // Validado Correo ==============================
    if( $('#email').val() == '' ){
        errores += '<p>Ingrese un correo</p>';
        $('#email').css("border-bottom-color", "#F14B4B")
    } else{
        $('#email').css("border-bottom-color", "#d1d1d1")
    }

    // Validado Mensaje ==============================
    if( $('#mensaje').val() == '' ){
        errores += '<p>Escriba un mensaje</p>';
        $('#mensaje').css("border-bottom-color", "#F14B4B")
    } else{
        $('#mensaje').css("border-bottom-color", "#d1d1d1")
    }

    // ENVIANDO MENSAJE ============================
    if( errores == '' == false){
        var mensajeModal = '<div class="modal_wrap">'+
                                '<div class="mensaje_modal">'+
                                    '<h3>Errores encontrados</h3>'+
                                    errores+
                                    '<span id="btnClose">Cerrar</span>'+
                                '</div>'+
                            '</div>'

        $('body').append(mensajeModal);
    }

    // CERRANDO MODAL ==============================
    $('#btnClose').click(function(){
        $('.modal_wrap').remove();
    });
});

});

</script>
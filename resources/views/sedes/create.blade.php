<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Sedes</title>
</head>
<body>
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE SEDES</h2>
            </section>
        </section>

        <form action="{{route('guardar_sedes')}}" class="form_contact">
        @csrf
            <h2>Informacion</h2>
            <div class="user_info">
                <label for="names">Nombres</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nombre" required>

                <label for="phone">Direccion</label>
                <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
                <input type="text" name="direccion" required>

                <input type="submit" value="Enviar">
            </div>
        </form>

    </section>
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
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;1,300&display=swap');
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

:root{
    --colorprincipal:#469C00;
    --colorprincipal2:#8FC73E;
    --colorprincipal3:#101728;
    --colorfondo:#F4F4F4;
    --fuente-principal: 'Roboto', sans-serif;

}

*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}

:focus{
    outline: none;
}

body{
    line-height: 1.4;
    margin: 0;
    background-color: var(--colorprincipal);
    background-position: center;
    color: #101728; 
    background-image: linear-gradient(115deg, 
        rgba(143,199,62, 0.8),
        rgba(211,255,173, 0.7)

        ),
    url(https://cdn.freecodecamp.org/testable-projects-fcc/images/survey-form-background.jpeg);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

/* FORMULARIO =================================== */

.form_wrap{
    width: 75%;
    height: 503px;
    margin: 50px auto;
    display: flex;

    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

/* Informacion de Contacto*/

.cantact_info::before{
    content: '';
    width: 100%;
    height: 100%;

    position: absolute;
    top: 0;
    left: 0;

    background: var(--colorprincipal);
    opacity: 0.9;
}

.cantact_info{
    width: 42%;
    position: relative;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    background-image: url('../fondo.jpg');
    background-size: cover;
    background-position: center center;

}

.info_title,
.info_items{
    position: relative;
    z-index: 2;
    color: #fff;
}

.info_title{
    margin-bottom: 60px;
}

.info_title span{
    font-size: 100px;
    display: block;
    text-align: center;
    margin-bottom: 15px;
}

.info_title h2{
    font-size: 35px;
    text-align: center;
}

.info_items p{
    display: flex;
    align-items: center;

    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.info_items p:nth-child(1) span{
    font-size: 30px;
    margin-right: 10px;
}

.info_items p:nth-child(2) span{
    font-size: 50px;
    margin-right: 15px;
    margin-left: 4px;
}


/* Formulario de contacto*/
form.form_contact{
    width: 62%;
    padding: 30px 40px;
}

form.form_contact h2{
	font-size: 40px;
	font-weight: 600;
	color: var(--colorprincipal);
	margin-bottom: 30px;
    text-align: center;
}

form.form_contact .user_info{
    display: flex;
    flex-direction: column;
}

form.form_contact label{
    font-weight: 800;
}

form.form_contact input,
form.form_contact textarea{
    width: 98%;
    padding: 8px 0px 5px;
    margin-bottom: 20px;
    text-align: center;

    border: none;
    border-bottom: 2px solid #D1D1D1;

    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	color: #101728;
	font-size: 14px;
	font-weight: 400;
}

form.form_contact textarea{
    max-width: 100%;
    min-width: 100%;
    max-height: 90px;
}

form.form_contact input[type="submit"]{
    width: 180px;
	background: var(--colorprincipal);
	padding: 10px;
	border: none;
	border-radius: 25px;

    align-self: flex-start;

    color: #fff;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	font-size: 16px;
	font-weight: 600;
	cursor: pointer;
}

form.form_contact input[type="submit"]:hover{
    background: var(--colorprincipal2);
}

/* Ventana de errores*/
.modal_wrap{
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.7);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;

    display: flex;
    justify-content: center;
    align-items: center;
}

.mensaje_modal{
    background: #fff;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
    width: 400px;
    padding: 30px 20px 15px;
}

.mensaje_modal h3{
    text-align: center;
    font-family: 'Ubuntu';
	font-size: 20px;
	font-weight: 400;
}

.mensaje_modal h3:after{
    content: '';
	display: block;
	width: 100%;
	height: 1px;
	background: #C5C5C5;
	margin: 10px 0px 15px;
}

.mensaje_modal p{
    font-size: 16px;
    color: #606060;
}

.mensaje_modal p:before{
    content: "\f00d";
    font-family: FontAwesome;
    display: inline-block;
    color: #E25151;
    margin-right: 8px;
}

#btnClose{
    display: inline-block;
	padding: 3px 10px;
	margin-top: 10px;

	background: #E25151;
	color: #fff;
	border: 2px solid #B14141;
	cursor: pointer;

	float: right;
}

</style>

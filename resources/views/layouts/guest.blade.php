<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('/build/assets/Logo.png')}}">

        <title>{{ config('app.name', 'Inicio de Sesion') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="display:grid;
    place-items:center; line-height: 1.4;
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
">
        <div class="header">
                <div class="icon">
                    <a href="/">
                        <img src="{{asset('/build/assets/Logo.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="title_sena">
                    <h1>SASH</h1>
                </div>
        </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
<style>
@import url( 'https://fonts.googleapis.com/css?family=Roboto');


:root{
    --colorprincipal:#469C00;
    --colorprincipal2:#8FC73E;
    --colorprincipal3:#101728;
    --colorfondo:#F4F4F4;
    --fuente-principal: 'Roboto', sans-serif;

}

*{
    
    margin:0;
    padding:0;
}
/*:before,:after{--tw-content: ""}*/


html{
   
    font-family:Figtree,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal}
    
/*
hr{
    height:0;
    color:inherit;
    border-top-width:1px
}*/

.header{
    width: 100%;
    height: 60px;
    background-color: var(--colorgeneral);
    box-sizing:border-box;
    border-radius: 0 0 10px 10px;
}

.header .icon{
    width: 50px;
    height: 50px;
    margin-left: 20px;
    margin-top: 5px;
    float:left;
}

.icon img{
    width: 50px;
    height: 50px;
}

.header .title_sena{
    width: 50%;
    height: 85%;
    float:left;
    font-size: 25px;
    font-weight: 600;
    margin-left: 20px;
    padding-top: 10px;
}

.header_login{
    width: 50%;
    height: 45%;
    float:left;
    
    
    text-align: center;
    justify-content: center;
    font-size: 33px;
}

form{
    text-align: center;
    justify-content: center;
    padding: 40px;
    margin: 20;
    float:right;
    font-size: 20px;
    border-radius: 15px;
    border-color:var(--colorgeneral);
}


</style>


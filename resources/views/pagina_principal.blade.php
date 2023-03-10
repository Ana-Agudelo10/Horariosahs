<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{asset('/estilos/estilos_principal.css')}}"> -->
        <link rel="icon" href="{{asset('/build/assets/Logo.png')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('/build/assets/estilos_tablas.css')}}">

    </head>

    <body>

        <aside class="toolbar">
        <img src="{{asset('/build/assets/Logo.png')}}" alt="Logo">
            <a href="#">
                <div id='botonbarralateral' class="hamburguesa">

                    <div class="btn_hamburguesa"></div>
                    <div class="btn_hamburguesa"></div>
                    <div class="btn_hamburguesa"></div>
                </div>
            </a>
            <nav>
                <ul>
                    <li class="up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                    </li>
                    <li class="up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" title="Mensajes" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                        </svg>
                    </li>

                    <li class="logout">
                            <a href="https://sena.territorio.la/init.php">
                            <img src="{{asset('/build/assets/Territorium.png')}}" alt="Territorium">
                            </a>

                    </li>
                    <li class="logout2">
                    <a href="https://oferta.senasofiaplus.edu.co/sofia-oferta/">
                            <img src="{{asset('/build/assets/Logo_sena.png')}}" alt="Sena Sofia Plus">
                            </a>
                    </li>
                    <li class="logout3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                    </li>
                </ul>
            </nav>
        </aside>
        <aside id="barralateral" class="sidebar">
            <nav>
                <ul>
                    <li>
                        <a href="{{route('calendario')}}" class="logo">
                            <img src="{{asset('/build/assets/Logo2.png')}}" alt="">
                            <span class="nav-item">SAHS</span>

                        </a>
                    </li>
                    <li>

                    </li>
                    <li>
                        <a href="{{route('calendario')}}" style="ist-style-type: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <span class="nav-item">PRINCIPAL</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sedes')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                                <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                              </svg>
                            <span class="nav-item">SEDES</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('ambientes')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                            </svg>
                            <span class="nav-item">AMBIENTES</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('instructores')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                              </svg>
                            <span class="nav-item">INSTRUCTORES</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('programas')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                                <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
                                <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                              </svg>
                            <span class="nav-item">PROGRAMAS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('fichas')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg>
                            <span class="nav-item">FICHAS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('semaforos')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-stoplights" viewBox="0 0 16 16">
                                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                <path d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z"/>
                              </svg>
                            <span class="nav-item">SEMAFORO</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('redes')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                            <span class="nav-item">REDES</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('areas')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM3 11.5A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                            <span class="nav-item">AREAS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tipos')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5zM1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                            <span class="nav-item">TIPOS DE FORMACION</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('informes')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                              </svg>
                            <span class="nav-item">INFORMES</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
    @yield('cuerpo')
    </div>
        <div class="footer">
        <footer id="main-footer" class="add-padding border-top-color2">

            <div class="container">
                <ul class="social-links text-center">
                <li><a href="https://twitter.com/SENASoacha" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                <li><a href="https://www.instagram.com/senacomunica/" target="_blank"><i class="fa fa-instagram fa-fw"></i></a></li>
                <li><a href="https://www.facebook.com/SENAenSoacha?mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                </ul>

                <p class="text-center">&copy; SAHS Derechos reservados 2023</p>

            </div>

        </footer>



        </div>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;1,300&display=swap');

        :root{
            --colorprincipal:#469C00;
            --colorprincipal2:#8FC73E;
            --colorprincipal3:#101728;
            --colorprincipal4:#59B410;
            --colorfondo:#F4F4F4;
            --fuente-principal: 'Roboto', sans-serif;

        }

        *
        {
            box-sizing: border-box;
            margin:0;
            padding:0;
        }

        body
        {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background: var(--colorfondo);
        }

        .logo {
            text-align: center;
            display: flex;
            transition: all 0.5s ease;
        }

        .logo img{
            width:70px;
            height: 70px;
            border-radius: 50%;
        }

        .logo span{
            font-weight: bold;
            padding:  20px 0 0 5px;
            font-size: 20px;
            text-transform: uppercase;
            text-align:center;
            float:left;
        }

        /* button{
            background: transparent;
            border: 0;
            padding: 0;
            cursor:pointer;
        }

        button img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
        } */

        a{

            display:inline-block;
            position: relative;
            color: var(--colorprincipal3);
            font-size: 14px;
            display: table;
            width: 300px;
            padding: 5px 0 5px 0;
            list-style-type: none;
        }

        ul{
            list-style: none;
        }

        .toolbar,
        .sidebar,
        .burger{
            position:fixed;
            top: 0;

        }

        .toolbar{
            z-index: 3;
            left: 0;
            top: 0;
            width: 70px;
            height: 100%;
            background: var(--colorprincipal);
            transition: 0.4s;
        }

        .toolbar img{

            width: 65px;
            height: 65px;
            margin-left:2px;
        }

        .sidebar{
            z-index: 2;
            left: 70px;
            width: 200px;
            height: 100%;

        }


        .sidebar nav {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            background: var(--colorprincipal2);
            width: 0px;
            overflow: hidden;
            transition: width 0.2s linear;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .sidebarexpandida nav{
            position:fixed;

            width: 300px;

            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            background: var(--colorprincipal2);
            overflow: hidden;
            transition: width 0.2s linear;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
            z-index: 2;
            left: 70px;
            height: 100%;
            transition: 0.4s ;
        }

        .logout{
            y-space:5px;
            color: var(--colorprincipal3);
            list-style-type: none;
            cursor:pointer;
            margin-top: 20px;
            position:absolute;
            bottom: 135px;

        }
        .logout2{
            y-space:5px;
            color: var(--colorprincipal3);
            list-style-type: none;
            cursor:pointer;
            position:absolute;
            bottom: 75px;

        }

        .logout3{
            y-space:5px;
            color: var(--colorprincipal3);
            list-style-type: none;
            cursor:pointer;
            position:absolute;
            bottom: 25px;

        }

        .logout img,
        .logout2 img{
            height: 33px;
            width: 33px;
        }

        .up{
            y-space:5px;
            color: var(--colorprincipal3);
            display:inline-block;
            margin-top: 25px;
            cursor:pointer;

        }


        .sidebarexpandida li svg{
            position: relative;
            width: 50px;
            height: 30px;
            top: 8px;
            font-size: 20px;
            text-align: center;
            color: var(--colorprincipal3);
            float:left;
        }

        .sidebarexpandida li.active{
            background-color: #af4c4c;

        }

        .sidebarexpandida li:hover:not(.active){
            background-color: var(--colorprincipal4);
            color: white;
            border-radius:5px;
        }

        /* li a svg{
            position: relative;
            width: 50px;
            height: 30px;
            top: 14px;
            font-size: 20px;
            text-align: center;
            color: var(--colorprincipal3);
            float:left;
        } */

        li a span{
            font-weight: bold;
            padding: 12px 0 8px 5px;
            font-size: 18px;
            text-transform: uppercase;
            color: var(--colorprincipal3);
            float:left;
            list-style: none;
        }

        .footer{
            position: absolute;
            width:100%;
        }


        .hamburguesa{
            width: 60px;
            height: 50px;

        }

        .hamburguesa img{
            width: 65px;
            height: 65px;
            margin-left:2px;
        }

        .btn_hamburguesa{
            float: center;
            margin-left:15px;
            width: 65%;
            height: 5px;
            background-color: var(--colorprincipal3);
            border-radius:5px;
            margin-top: 6px;
            list-style: none;
            y-space:5px;
        }
    #main-footer {
        background: var(--colorprincipal2);
    }

    #main-footer p a {
        padding-bottom: 40px;
        font-size: 25px;
        text-decoration: none;
    }

    #main-footer p {
        text-align: center;
        padding-bottom: 10px;
        font-weight: bold;
        color: var(--colorprincipal3);

    }

    .social-links {
        list-style:none;
        margin:0;
        padding:0;
        margin-bottom:30px;
        padding:15px 0 0;
    }

    .social-links li{
        display:inline-block;
        margin:0 5px;
        border-radius:3px;
        box-shadow:0 4px 0 transparent;
        -webkit-transition:all .3s ease-out;
        transition:all .3s ease-out;
    }

    .social-links li a {
        display:block;
        color:#fff;
        font-size:21px;
        width:50px;
        height:50px;
        line-height:50px;
        text-align:center;
        background:var(--colorprincipal2);
        border-radius:50%;
        -webkit-transition:all .3s ease-out;
        transition:all .3s ease-out;
    }

    .social-links li a:hover {
        color:#fff;
        background:var(--colorprincipal);
    }


    </style>
    <script>
        const boton = document.querySelector('#botonbarralateral');
        const menu = document.querySelector('#barralateral');

        boton.addEventListener('click',e=>{
            event.preventDefault();
            menu.classList.toggle('sidebar');
            menu.classList.toggle('sidebarexpandida');
        })
        </script>

    </html>
</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="title" content="Linaje Peruano">
        <meta name="description" content="Pre venta julio de Linaje Peruano">
        <meta name="keyword" content="Linaje Peruano, Aniversario, Fiesta, Cardio, Peruano">

        <title>Linaje Peruano</title>

        <link rel="icon" type="image/png" href="/images/favicon.png" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/site.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136489706-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-136489706-1');
        </script>


    </head>
    <body>

        <!-- CABEZOTE -->

        <!-- TOP -->
        <div class="container-fluid barraSuperior" id="top">
            <div class="container">
                <div class="row">

                    <!-- SOCIAL -->
                    <div class="col-12 social">
                        <ul>
                            <li>
                                <a href="http://facebook.com/somoslinajeperuano" target="_blank">
                                    <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/LinajePeruanoTV" target="_blank">
                                    <i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/linaje.peruano/" target="_blank">
                                    <i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    
    
    <!-- HEADER -->
    <header class="container-fluid">
        <div class="container">
            <div class="row" id="cabezote">
    
                <!-- LOGO -->
                <div class="col-12" id="logotipo">
                    <img src="{{ asset('img/promocion/logo.jpg') }}" class="img-responsive mx-auto d-block" />
                </div>
    
            </div>
    
        </div>
    </header>
    
    <!--/ CABEZOTE -->
    
    
    <!-- SLIDE-->
    
    <div class="container-fluid" id="slide">
    
        <div class="row">
            <!-- DIAPOSITIVAS -->
    
            <ul>
    
                <!-- SLIDE 1 -->
                <li>
                    <img src="{{ asset('img/promocion/s4.jpg') }}" alt="Slide1" />
                </li>
    
                <!-- SLIDE 2 -->
                <li>
                    <img src="{{ asset('img/promocion/s2.jpg') }}" alt="Slide2" />
                </li>
    
                <!-- SLIDE 3 -->
                <li>
                    <img src="{{ asset('img/promocion/s3.jpg') }}" alt="Slide3" />
                </li>
    
                <!-- SLIDE 4 -->
                <li>
                    <img src="{{ asset('img/promocion/s1.jpg') }}" alt="Slide4" />
                </li>
    
    
            </ul>
    
            <!-- PAGINACION -->
            <ol id="paginacion">
                <li item="1"><span class="fa fa-circle"></span></li>
                <li item="2"><span class="fa fa-circle"></span></li>
                <li item="3"><span class="fa fa-circle"></span></li>
                <li item="4"><span class="fa fa-circle"></span></li>
            </ol>
    
            <!-- FLECHAS -->
            <div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
            <div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
    
        </div>
    
    </div>
    
    <!--/ SLIDE-->
    
    
    <!------------------------------ INDEX ---------------------------->
    
    
    <!--=====================================
    BARRA CURSOS ADULTOS
    ======================================-->
    
    <div class="container-fluid card bg-light my-3 barraProductos" id="divCursos">
        <div class="container">
            <h3><b>ADULTOS</b></h3>
        </div>
    </div>
    
    <!--=====================================
    VITRINA DE CURSOS AFROAEROBIKOS
    ======================================-->
    
    <div class="container-fluid productos">
    
        <div class="container">
    
            <!--=====================================
            VITRINA DE CURSOS PERUANAZOS EN CUADRÍCULA
            ======================================-->
    
            <ul class="grid0 row">
    
                <!-- Producto 1 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Afroaerobicos-LMV.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">
                            <p class="card-text-title">Afroeróbikos</p>
                            <div class="card-text-body">
                                <p>lunes, miércoles y viernes</p>
                                <p>07 pm - 08 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 356</b></p>
                            </div>

                            <div class="row enlaces">
                                <div class="col-12">
                                    <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>   
                                </div>
                            </div>
    
                        </div>
    
                    </div>
                </li>
    
                <!-- Producto 2 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                       <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Afroaerobicos-LMV.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">
                            <p class="card-text-title">Afroeróbikos</p>
                            <div class="card-text-body">
                                <p>Lunes, miércoles y viernes</p>
                                <p>09 am - 10 am</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 356</b></p>
                            </div>

                            <div class="col-12 enlaces">
                                <button type="button" class="btn btn-purple btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
    
                    </div>
                 </li>
    
                <!-- Producto 3 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Ritmo-Afro-LMV.png') }}" class="img-responsive card-img" >
                            </a>
                        </figure>
                        <!--===============================================-->
                        <div class="card-body">                             
                            <p class="card-text-title">Ritmo Afroperuanos</p>
                            <div class="card-text-body">
                                <p>Lunes, miércoles y viernes</p>
                                <p>08 pm - 09 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 356</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                    <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
                                </div>
                        </div>
                        <!--===============================================-->
                        
                    </div>
                </li>
    
                <!-- Producto 4 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Fulklore-MJ.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                                <p class="card-text-title">Fullklore</p>
                            <div class="card-text-body">
                                <p>Martes y jueves</p>
                                <p>08 pm - 09 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-danger btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
    
                    </div>
    
    
                </li>
    
                <!-- Producto 5 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Ritmo-Afro-MJ.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                            <p class="card-text-title">Ritmos Afroperuanos</p>
                            <div class="card-text-body">
                                <p>martes y jueves</p>
                                <p>08 pm - 09 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
                    </div>
                </li>
    
                <!-- Producto 6 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Afro-y-Cajon.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                                <p class="card-text-title">Cajón y Afro</p>
                            <div class="card-text-body">
                                <p>Sábado</p>
                                <p>05 pm - 06 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
    
                    </div>
    
    
                </li>
                
                <!-- Producto 7 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Afroaerobicos-S.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                                <p class="card-text-title">Afroeróbikos</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>09 am - 10 am</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
    
                    </div>
                </li>
    
                <!-- Producto 8 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                       <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Caporales.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                                <p class="card-text-title">Caporales</p>
                            <div class="card-text-body">
                                <p>Sábado</p>
                                <p>11 am - 12 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-purple btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
                    </div>
                 </li>
    
                <!-- Producto 9 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Fulklore-S.png') }}" class="img-responsive card-img" >
                            </a>
                        </figure>
                        <!--===============================================-->

                        <div class="card-body">                             
                                <p class="card-text-title">Fullklore</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>09 am - 10 am</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
                    </div>
                </li>
    
                <!-- Producto 10 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/adultos/Marinera-Adultos-S.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                            
                                 <p class="card-text-title">Marinera Norteña</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>11 am - 12 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-danger btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
                        </div>
                    </div>
    
    
                </li>
    
                <!-- Producto 11 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Marinera-Adultos-S.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                                <p class="card-text-title">Marinera Norteña</p>
                            <div class="card-text-body">
                                <p>Sábado</p>
                                <p>04 pm - 05 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
    
    
                        <!--===============================================-->
    
                        
    
                    </div>
                </li>
    
                <!-- Producto 12 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Ritmo-Total-S.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                             
                            <p class="card-text-title">Ritmo Total</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>12 pm - 01 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
        
                            </div>
    
                        </div>
    
                    </div>
    
    
                </li>
                
                <!-- Producto 13 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Ritmo-Afro-S.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                        <div class="card-body">                           
                            <p class="card-text-title">Ritmos Afroperuanos</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>10 am - 11 am</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-12 enlaces">
    
                                <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
        
                            </div>
    
                        </div>
    
                    </div>
                </li>
    
                <!-- Producto 14 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
    
                            <a href="#" class="pixelProducto">
    
                                <img src="{{ asset('img/cursos/adultos/Salsa-y-Bachata-S.png') }}" class="img-responsive card-img">
    
                            </a>
    
                        </figure>
    
                        <!--===============================================-->
    
                            <div class="card-body">                             
                                <p class="card-text-title">Salsa y Bachata</p>
                            <div class="card-text-body">
                                <p>Sábado</p>
                                <p>04 pm - 05 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-12 enlaces">
    
                                <button type="button" class="btn btn-warning btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
        
                            </div>
    
                        </div>
                    </div>
    
                </li>
    
    
            </ul>
    
        </div>
    
    </div>
    
    <!--=====================================
    BARRA CURSOS KIDS Y NIÑOS
    ======================================-->

    <div class="container-fluid card bg-light my-3 barraProductos" id="divCursos">
        <div class="container">
            <h3><b>KIDS Y NIÑOS</b></h3>
        </div>
    </div>
    <!--=====================================
    VITRINA DE CURSOS KIDS Y BIÑOS
    ======================================-->
    
    <div class="container-fluid productos">
    
        <div class="container">
    
            <!--=====================================
            VITRINA DE CURSOS PERUANAZOS EN CUADRÍCULA
            ======================================-->
    
            <ul class="grid0 row">
    
                <!-- Producto 1 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Marinera-kids-LMV.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
                            <div class="card-body">                        
                                <p class="card-text-title">Marinera Norteña Kids (de 3 a 5 años)</p>
                            <div class="card-text-body">
                                <p>Lunes, miércoles y viernes</p>
                                <p>04 pm - 05 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 356</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
                    </div>
    
    
                </li>
                
                <!-- Producto 3 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Marinera-niños-MJ.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
                        <div>
                            <div class="card-body">
                                <p class="card-text-title">Marinera Norteña Niños (de 6 a 12 años)</p>
                            <div class="card-text-body">
                                <p>Martes y jueves</p>
                                <p>05 pm - 06 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
                        
                    </div>
    
    
                </li>
    
                <!-- Producto 4 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Ritmos-afro-niños-MJ.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
                        <!--===============================================-->
                       
                        <div class="card-body">                   
                            <p class="card-text-title">Ritmos Afroperuanos Niños (de 6 a 12 años)</p>
                            <div class="card-text-body">
                                <p>Martes y jueves</p>
                                <p>05 pm - 06 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-danger btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
            
                        </div>
                       
                    </div>
                </li>
                
                <!-- Producto 5 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Induccion-mj.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
                        <div class="card-body">                       
                            <p class="card-text-title">Inducción al Baile (de 2 a 3 años)</p>
                            <div class="card-text-body">
                                <p>Martes y jueves</p>
                                <p>03 pm - 04 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
                                <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                    <span> ¡LO QUIERO!</span>
                                </button>
                            </div>
    
                        </div>
    
                    </div>
    
    
                </li>
    
                <!-- Producto 6 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Pre-ballet-MJ.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
                        <!--===============================================-->
                        <div class="card-body">                            
                                <p class="card-text-title">Pre Ballet (de 3 a 5 años)</p>
                            <div class="card-text-body">
                                <p>Martes y jueves</p>
                                <p>04 pm - 05 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 342</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-danger btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
                    </div>
                </li>
                
                <!-- Producto 7 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
    
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
    
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Clown-con-mama.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
    
                        <!--===============================================-->
                        <div class="card-body">                            
                                <p class="card-text-title">Clown con Mamá (de 3 a 8 años)</p>
                            <div class="card-text-body">
                                <p>Sábado</p>
                                <p>11 am - 12 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-success btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
                    </div>
    
    
                </li>
    
                <!-- Producto 8 -->
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card mb-4 shadow-sm">
                        <!--===============================================-->
                        <figure>
                            <a href="#" class="pixelProducto">
                                <img src="{{ asset('img/cursos/ninios/Ritmos-afro-niños-S.png') }}" class="img-responsive card-img">
                            </a>
                        </figure>
                        <!--===============================================-->
                        <div class="card-body">                           
                                <p class="card-text-title">Ritmos Afroperuanos Niños (de 6 a 12 años)</p>
                            <div class="card-text-body">
                                <p>sábado</p>
                                <p>12 pm - 01 pm</p>
                                <p>Duración: 2 meses</p>
                                <p>Precio promoción: <b class="text-red">S/ 280</b></p>
                            </div>

                            <div class="col-xs-12 enlaces">
    
                                    <button type="button" class="btn btn-danger btn-sm form-control agregarCarrito">
                                        <span> ¡LO QUIERO!</span>
                                    </button>
            
                                </div>
    
                        </div>
    
                    </div>
                </li>
    
            </ul>
    
        </div>
    
    </div>
    
    
    
    <br />
    
    
    
    <!-- Modal -->
    <div class="modal fade in" id="myModalNorm" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Registrar datos</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
    
                <!-- Modal Body -->
                <div class="modal-body">
    
                    <form role="form" action="{{ route('crear_socio') }}" method="POST">

                        @csrf
    
                      <div class="form-group">
                        <label for="nombres">Nombres</label>
                          <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombres" required />
                      </div>
    
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" required />
                      </div>
    
                      <div class="form-group">
                        <label for="celular">Celular</label>
                          <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese celular" required />
                      </div>
    
                      <div class="form-group">
                        <label for="correo">Correo</label>
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo" />
                      </div>
    
                      <div class="form-group">
                        <input type="hidden" id="curso" name="curso">
                      </div>
    
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control"><i class="fa fa-send"></i> Enviar</button>
                      </div>
    
    
                    </form>
    
    
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!-----------------------------/ INDEX ----------------------------------------------->
    
    
    
    
    <footer class="bg-dark" style="background: black">
        <div class="container-fluid">
            <div class="text-center" style="color: white">
                <br />
                TÉRMINOS Y CONDICIONES
                <br />
                <br />*Los cupos de los cursos son limitados.
                <br />*La promoción es exclusiva para alumnos nuevos.
                <br />*La promoción no es válido para renovaciones.
                <br />*Es importante ver los horarios de los cursos, ya que estos pueden variar.
                <br />*Para asegurar tu matrícula, debes hacer la transferencia bancaria que te enviaremos al correo.
                <br />*La promoción es válida únicamente hasta el domingo 30 de Junio del 2019.
                <br />*Debes recibir un correo de confirmación para validar tu cupo.
                <br />*Para más información y consultas, no dudes en llamarnos: 01 264-3452 o visítanos en Av. El Ejército 1059, Magdalena del Mar.
            </div>
        </div>
    </footer>
    
    
       
    </body>
</html>

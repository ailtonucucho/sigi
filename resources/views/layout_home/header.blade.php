<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- FOR MORE PROJECTS visit: codeastro.com -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('template/images/favicon.ico')}}">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/layerslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/color.css')}}" id="color-change">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/login.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />

    <!--	Title
	=========================================================-->
    <title>
        SIGI
    </title>
</head>

<body>


    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white  d-table">
                        <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+258 84 928 4152</a></li>
                        <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>contacts@sigi.co.mz</a></li>

                       

                    </ul>
                </div>
                <div class="col-md-4">
                    @auth
                        {{ Auth::user()->name }}
                    @else
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-success mr-1"></i>
                                
                                <a href="/login">Entrar</a>&nbsp;&nbsp;

        
                            </li>
                            <li><i class="fas fa-user-plus text-success mr-1"></i><a href="/register">
                                    Registrar</li>
                        </ul>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav hover-success-nav py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative"
                            href="/"><img class="nav-logo" src="{{asset('template/images/logo/restatelg.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown"> <a class="nav-link" href="/" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        Inicio</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/about">Acerca</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/contact">Contactos</a> </li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/property">Propriedades</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="/agent">Agentes</a>
                                </li>
                                @auth
                    
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Minha conta</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                href="/profile">Perfil</a> </li>
                                        <!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
                                        <li class="nav-item"> <a class="nav-link"
                                                href="/feature">Propriedades</a> </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Sair</a> </li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                                    </ul>
                                </li>
                                @else
                                        <li class="nav-item"> <a class="nav-link"
                                        href="/login">Entrar/Registrar</a>
                                        </li>
                                @endauth


                                
                                
                                
                                

                            </ul>

                            @auth
                                <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;"
                                    href="property/submit">
                                    Submeter Propriedade
                                </a>
                            @else
                                <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;"
                                    href="property/submit">
                                    Submeter Propriedade
                                </a>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
            <!--	Header end  -->
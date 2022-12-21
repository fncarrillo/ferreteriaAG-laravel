<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--
    <link rel="stylesheet" type="text/css" href="css/masterdata.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/catalogue.css">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
    -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/masterdata.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/inicio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/catalogue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/perfil.css')}}">
    <!--Font&Logo-->
    <link rel="icon" type="image/jpg" href="{{asset('img/logo/logo-pestaña.jpg')}}"/>
    <script src="https://kit.fontawesome.com/f2e4cb46e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Sen&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Comfortaa-->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <!--Questrial-->
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <title>Ferreteria AG</title>
</head>

<body>

<header class="header">
    <div class="logo_container">
        <img src="{{asset('img/logo/logo.png')}}">
    </div>
    <div class="header__nav-bars fas fa-bars">
        <nav class="header-nav">
            <ul class="header-nav__ul">
                <li class="header-nav__li"><i class="fas fa-home"></i><a href="{{url('inicio')}}"> Inicio </a></li>
                <li class="header-nav__li"><i class="fas fa-box"></i><a href="{{url('catalogue')}}"> Productos </a></li>
                <li class="header-nav__li"><i class="fas fa-comment-alt"></i><a href="{{url('contact')}}"> Contacto </a>
                </li>
                <?php $usuario = Auth::user(); ?>
                <li class="header-nav__li"><i class="fas fa-user"></i><a href=@if(isset($usuario) && !is_null($usuario)) "{{ route('perfil.index') }}">Perfil</a></li>
                @else"{{ route('login.index') }}"> Logear </a></li> @endif
                @if(isset($usuario) && !is_null(($usuario)))
                    <li class="header-nav__li"><i class="fas fa-shopping-cart"><a href="{{route('cart.index')}}" style="text-decoration: none"><span
                                    class="badge">{{Cart::getTotalQuantity()}}</span></a></i>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>

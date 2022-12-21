<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/masterdata.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--Font&Logo-->
    <link rel="icon" type="image/jpg" href="img/logo/logo-pestaña.jpg"/>
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

<span class="background-image"></span>

<form class="form-login" method="POST" action="{{ route('signin.store') }}">
    @csrf

    <div class="logo-container">
        <img alt="Ferreteria AG" src="img/logo/logo.png">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="{{old('apellido')}}">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="correo@gmail.com" value="{{old('email')}}" required>
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
    </div>

    @if(isset($errors) && $errors->any())
        <div class="alert alert-danger" style="margin: 20px 0">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-button-group">
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
</form>

</body>
</html>

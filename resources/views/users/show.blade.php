<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuario | Kuolix</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">


  </head>
  <body>
    <!--Encabezado-->
    <header>
      <div class="imagen">
        <img src="{{asset('img/logo.png')}}" alt="Logo de kuolix">
      </div>
      <nav>
        <ul class="menu">
          <li><a href="{{ route('users.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <h2>{{ $user->name ." ".$user->last_name}}</h2>
        <p>Correo: {{ $user->email }}</p>
        <p>Teléfono: {{ $user->phone_number }}</p>
      </section>
    </section>
  </body>
</html>

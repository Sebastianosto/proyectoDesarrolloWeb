<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarse | Kuolix</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/landing_page.css">

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
        <img src="./img/logo.png" alt="Logo">
      </div>
      <nav>
        <ul class="menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('login') }}">Ingresar</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <div class="logo">
          <img src="./img/logo.png" alt="Logo">
        </div>
        <h2>Registrarse | Kuolix</h2>
        <form class= "formulario" action="{{route('register') }}" method="POST">
          @csrf
          <label for="name">Nombre:</label>
          <input type="text" name="name" placeholder="Escribe tu nombre"maxlength="20" id="name">
          @error('name')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <label for="last_name">Apellido:</label>
          <input type="text" name="last_name"placeholder="Escribe tu apellido" id="last_name">
          @error('last_name')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <label for="phone_number">Número telefónico:</label>
          <input type="tel" name="phone_number"placeholder="Escribe tu número de teléfono"id="phone_number">
          @error('phone_number')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <label for="email">Email:</label>
          <input type="email" name="email"placeholder="Correo Electrónico" id="email">
          @error('email')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <label for="password">Contraseña:</label>
          <input type="password" name="password" placeholder="Escribe tu Contraseña" maxleng th="20" id="password">
          @error('password')
            <p style="color:red">{{ $message }}</p>
          @enderror
          <input type="submit" value="Registrarse">

        </form>
      </section>
    </section>
  </body>
</html>

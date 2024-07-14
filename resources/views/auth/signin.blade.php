<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión | Kuolix</title>
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
          <li><a href="{{ route('register') }}">Registrarse</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <div class="logo">
          <img src="./img/logo.png" alt="Logo">
        </div>
        <h2>Iniciar Sesión | Kuolix</h2>
        <form class= "formulario" accion="{{ route('login') }}" method="POST">
          @csrf

          <label for="email">Email:</label>
          <input type="email" name="email"placeholder="Correo Electrónico" id="email">
          @error('email')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <label for="password">Contraseña:</label>
          <input type="password" name="password" placeholder="Escribe tu Contraseña" maxlength="20" id="password">
          @error('password')
            <p style="color:red">{{ $message }}</p>
          @enderror

          <input type="submit" value="Iniciar Sesión">
        </form>

      </section>
    </section>
  </body>
</html>

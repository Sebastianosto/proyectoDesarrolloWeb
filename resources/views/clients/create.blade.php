<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clientes | Kuolix</title>
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
    <header>
      <div class="imagen">
        <img src="{{asset('img/logo.png')}}" alt="Logo de kuolix">
      </div>
      <nav>
        <ul class="menu">
          <li><a href="{{ route('clients.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <section class="wrap">
      <section class="main">

        <form class= "form" action="{{ route('clients.store') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Escribe tu nombre"maxlength="20" id="name">
            @error('name')
              <p style="color:red">{{ $message }}</p>
            @enderror
    
            <label for="phone_number">Número telefónico:</label>
            <input type="text" name="phone_number"placeholder="Escribe tu número de teléfono"id="phone_number">
            @error('phone_number')
              <p style="color:red">{{ $message }}</p>
            @enderror
  
            <label for="address">Direccion:</label>
            <input type="textarea" name="address"placeholder="Escribe tu dirección"id="address">
            @error('address')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="email">Email:</label>
            <input type="email" name="email"placeholder="Correo Electrónico" id="email">
            @error('email')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="datebirth">Fecha de nacimiento:</label>
            <input type="date" name="datebirth" id="datebirth">
            @error('datebirth')
              <p style="color:red">{{ $message }}</p>
            @enderror


            <label for="nationality">Nacionalidad:</label>
            <div class="venezolana">
              <input type="radio" name="nationality" value="Venezolana">
              <label for="html">Venezolana</label><br>
            </div>
            <div class="extranjero">
              <input type="radio" name="nationality" value="Extranjero">
              <label for="html">Extranjero</label><br>
            </div>
            @error('nationality')
              <p style="color:red">{{ $message }}</p>
            @enderror  

            <label for="entity:">Entidad:</label>
            <div class="natural">
              <input type="radio" name="entity" value="Natural">
              <label for="html">Natural</label><br>
            </div>
            <div class="juridica">
              <input type="radio" name="entity" value="Juridica">
              <label for="html">Juridica</label><br>
            </div>
            @error('entity')
              <p style="color:red">{{ $message }}</p>
            @enderror  


            <input type="submit" value="Crear Cliente">
          </form>
  
      </section>
    </section>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear Ticket | Kuolix</title>
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
          <li><a href="{{ route('tickets.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <section class="wrap">
      <section class="main">

        <form class= "form" action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Escribe tu nombre"maxlength="20" id="name">
            @error('name')
              <p style="color:red">{{ $message }}</p>
            @enderror
    
            <label for="description">Descripción:</label>
            <input type="textarea" name="description"placeholder="Escribe tu descripcion"id="description">
            @error('description')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="client">Email del Cliente:</label>
            <input type="email" name="client" id="client" placeholder="Email">
            @error('client')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="user">Email del Usuario:</label>
            <input type="email" name="user"id="user" value="{{auth()->user()->email}}">
            @error('user')
              <p style="color:red">{{ $message }}</p>
            @enderror


            <input type="checkbox" name="status" value="Resuelto">
            <label for="status">Resuelto</label>
            @error('status')
              <p style="color:red">{{ $message }}</p>
            @enderror            

            <input type="submit" value="Crear Ticket">
          </form>
  
      </section>
    </section>
  </body>
</html>

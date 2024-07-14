<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear Proyecto | Kuolix</title>
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
          <li><a href="{{ route('projects.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <section class="wrap">
      <section class="main">

        <form class= "form" action="{{ route('projects.store') }}" method="POST">
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
  
            <label for="created_date">Fecha de Creación:</label>
            <input type="date" name="created_date" id="created_date">
            @error('created_date')
              <p style="color:red">{{ $message }}</p>
            @enderror


            <label for="ended_date">Fecha Límite:</label>
            <input type="date" name="ended_date" id="ended_date">
            @error('ended_date')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="responsable_1">Responsable 1:</label>
            <input type="text" name="responsable_1"placeholder="Escribe el Responsable"id="responsable_1">
            @error('responsable_1')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="responsable_2">Responsable 2:</label>
            <input type="text" name="responsable_2" placeholder="Escribe el responsable"id="responsable_2">
            @error('responsable_2')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="responsable_3">Responsable 3:</label>
            <input type="text" name="responsable_3"placeholder="Escribe el responsable"id="responsable_3">
            @error('responsable_3')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="checkbox" name="status" value="Resuelto">
            <label for="status">Proyecto Concluído</label>
            @error('status')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="submit" value="Crear Proyecto">
          </form>
  
      </section>
    </section>
  </body>
</html>

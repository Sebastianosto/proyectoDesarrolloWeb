<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Tarea | Kuolix</title>
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
          <li><a href="{{ route('issues.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <section class="wrap">
      <section class="main">

        <form class= "formulario" action="{{ route('issues.update', $issue) }}" method="POST">
            @csrf @method('PATCH')
            <label for="name">Título:</label>
            <input type="text" name="name" placeholder="Escribe tu titulo"maxlength="20" id="name" value="{{ old('name',$issue->name)}}">
            @error('name')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <label for="project">Proyecto:</label>
            <input type="text" name="project" placeholder="Escribe tu proyecto" id="project" >
            @error('project')
              <p style="color:red">{{ $message }}</p>
            @enderror
   

            <label for="description">Descripción:</label>
            <input type="text" name="description"placeholder="Escribe tu descripcion"id="description" value="{{ old('description',$issue->description)}}">
            @error('description')
              <p style="color:red">{{ $message }}</p>
            @enderror
  
            <label for="deadline">Fecha Límite:</label>
            <input type="date" name="deadline" id="deadline" value="{{ old('deadline',$issue->deadline)}}">
            @error('deadline')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="checkbox" name="status" value="Resuelto">
            <label for="status">Resuelto</label>
            @error('status')
              <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="submit" value="Editar Tarea">
          </form>
  
      </section>
    </section>
  </body>
</html>

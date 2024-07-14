<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos | Kuolix</title>
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
          <li><a class="actual_link" href="{{ route('projects.index')}}">Proyectos</a></li>
          <li><a href="{{ route('issues.index')}}">Tareas</a></li>
          <li><a href="{{ route('clients.index')}}">Clientes</a></li>
          <li><a href="{{ route('tickets.index')}}">Tickets</a></li>
          <li><a href="{{ route('users.index')}}">Usuarios</a></li>
        </ul>
        <div class="cerrar_sesion">
          @auth
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar Sesión</button>
          </form>
        @endauth

        </div>

      </nav>
    </header>

    <!--Cuerpo-->

    <section class="wrap">
      <div class="titulo">
        <h2>PROYECTOS</h2>
      </div>
      <div class="crear">
        <a href="{{ route('projects.create') }}"><button>Crear Proyecto</button></a>
      </div>
      @foreach ($projects as $project)
          <section class="card">
              <h2><a href="/projects/{{ $project->id }}">{{ $project['name'] }}</a></h2>
              <a href="{{ route('projects.edit', $project)}}">Editar</a>
              <form action="{{ route('projects.destroy', $project)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
              </form>
          </section>
      @endforeach
    </section>

  </body>
</html>

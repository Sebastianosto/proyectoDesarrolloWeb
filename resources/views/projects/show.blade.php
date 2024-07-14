<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyecto | Kuolix</title>
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
          <li><a href="{{ route('projects.index') }}">Regresar</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <h2>{{ $project->name }}</h2>
        <p>Descripción: {{ $project->description }}</p>
        <p>Fecha de Creación: {{ $project->created_date }}</p>
        <p>Fecha Límite: {{ $project->ended_date }}</p>
        <p>Status: {{ $project->status }}</p>
        <p>Responsables:</p> 
        @if ($project->user1)
            <a href="/users/{{ $project->user1->id }}"><h3>{{ $project->user1->name }}</h3></a>
        @endif

        @if ($project->user2)
        <a href="/users/{{ $project->user2->id }}"><h3>{{ $project->user2->name }}</h3></a>
        @endif

        @if ($project->user3)
        <a href="/users/{{ $project->user3->id }}"><h3>{{ $project->user3->name }}</h3></a>
        @endif

        <p>Tareas: </p>
        @foreach ($issues as $issue)
          <a href="/issues/{{ $issue->id }}"><h3>{{ $issue->name }}</h3></a>
        @endforeach
      

        <a href="{{ route('issues.create') }}"><button>Agregar Tarea</button></a>
      </section>
    </section>
  </body>
</html>

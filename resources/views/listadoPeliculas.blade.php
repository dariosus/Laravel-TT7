<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="jumbotron">
      Bienvenidos a mi sitio
    </div>
    <ul>
      @foreach ($peliculas as $pelicula)
        <li>
          <a href="/peliculas/{{$pelicula->id}}">
            {{$pelicula->title}} - Genero: {{$pelicula->getNombreGenero()}}
          </a>
        </li>
      @endforeach
    </ul>
  </body>
</html>

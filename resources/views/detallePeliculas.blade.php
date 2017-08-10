@extends("plantillas.plantilla")

@section("sarasa")
    {{$pelicula->title}}
    <br>
    Genero: {{$pelicula->getNombreGenero()}}
    <br>
    <h2>Actores</h2>
    <ul>
      @foreach($pelicula->actores as $actor)
        <li>
          {{$actor->getNombreCompleto()}}
        </li>
      @endforeach
    </ul>

    <img width="40" src="/storage/{{$pelicula->poster}}" alt="">


    <a href="/delete/{{$pelicula->id}}">Borrar Pelicula</a>
@endsection

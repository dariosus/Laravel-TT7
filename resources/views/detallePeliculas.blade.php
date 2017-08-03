@extends("plantillas.plantilla")

@section("sarasa")
    {{$pelicula->title}}
    <br>
    Genero: {{$pelicula->genero->name}}
    <br>
    <h2>Actores</h2>
    <ul>
      @foreach($pelicula->actores as $actor)
        <li>
          {{$actor->getNombreCompleto()}}
        </li>
      @endforeach
    </ul>
    <a href="/delete/{{$pelicula->id}}">Borrar Pelicula</a>
@endsection

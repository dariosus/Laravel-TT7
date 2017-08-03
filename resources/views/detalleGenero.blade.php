@extends("plantillas.plantilla")

@section("sarasa")
  Me pidieron el genero {{$genero->name}}
  <ul>
  @foreach($genero->peliculas as $pelicula)
    <li>
      {{$pelicula->title}}
    </li>
  @endforeach
  </ul>
@endsection

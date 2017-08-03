@extends("plantillas.plantilla")

@section("sarasa")
    {{$pelicula->title}}

    <a href="/delete/{{$pelicula->id}}">Borrar Pelicula</a>
@endsection

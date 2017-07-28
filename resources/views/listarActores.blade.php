@extends("plantillas.plantilla")

@section("css")
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section("sarasa")
    <form class="" action="/buscar" method="post">
      {{ csrf_field() }}
      <input type="text" name="buscador" value="">
      <input type="submit" name="" value="Buscar">
    </form>
    <ul>
      @forelse($actores as $actor)
        <li>
          <a href="/actores/{{$actor->id}}">
            {{$actor->getNombreCompleto()}}
          </a>
        </li>
      @empty
        No hay actores
      @endforelse
    </ul>
@endsection

@extends("plantillas.plantilla")

@section("css")
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section("sarasa")
    <ul>
      @forelse($generos as $genero)
        @if ($genero == "Comedia")
          <li style="color:blue;">
            {{$genero->name}} - {{$genero->ranking}}
          </li>
        @else
          <li>
            {{$genero->name}} - {{$genero->ranking}}
          </li>
        @endif
      @empty
        No hay generos
      @endforelse
    </ul>
@endsection

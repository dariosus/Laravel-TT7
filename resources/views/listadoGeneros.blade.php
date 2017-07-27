@extends("plantillas.plantilla")

@section("css")
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section("sarasa")
    <ul>
      @forelse($generos as $genero)
        @if ($genero == "Comedia")
          <li style="color:blue;">
            {{$genero}}
          </li>
        @else
          <li>
            {{$genero}}
          </li>
        @endif
      @empty
        No hay generos
      @endforelse
    </ul>
@endsection

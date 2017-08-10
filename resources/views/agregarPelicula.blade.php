@extends("plantillas.plantilla")

@section("sarasa")
      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
        </div>
    @endif
    <form class="" action="/agregarPelicula" method="post" style="margin-left:25px;" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="">
        <label for="">Nombre</label>
        <input type="text" name="title" value="{{old('title')}}">
      </div>
      <div class="">
        <label for="">Rating</label>
        <input type="text" name="rating" value="{{old('rating')}}">
      </div>
      <div class="">
        <label for="">Premios</label>
        <input type="text" name="awards" value="{{old('awards')}}">
      </div>
      <div class="">
        <label for="">Duracion</label>
        <input type="text" name="length" value="{{old('length')}}">
      </div>
      <div class="">
        <label for="">Fecha de Estreno</label>
        <input type="date" name="release_date" value="{{old('release_date')}}">
      </div>
      <div class="">
        <label for="">POSTER</label>
        <input type="file" name="poster">
      </div>
      <div class="">
        <button type="submit" value="Enviar" class="btn btn-default">Enviar</button>
      </div>
    </form>
@endsection

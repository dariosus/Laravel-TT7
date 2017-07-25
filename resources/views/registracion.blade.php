<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
          <h1>Registración</h1>
        </div>
        <form class="" action="/registracion" method="post">
          {{ csrf_field() }}
          <!--<input type="hidden" name="_method" value="PUT">!-->
          <div class="">
            <input type="text" name="nombre" value="">
          </div>
          <div class="">
            <input type="submit" name="" value="Enviar">
          </div>
        </form>
    </div>

  </body>
</html>

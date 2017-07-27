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
      <?php foreach($generos as $genero) : ?>
        <li>
          <?=$genero?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>

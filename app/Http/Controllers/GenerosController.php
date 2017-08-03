<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function listarGeneros() {
      $generos = \App\Genre::all();

      $data = [
        "generos" => $generos
      ];

      return view("listadoGeneros", $data);
    }

    public function detalleGenero($id) {
      $genero = \App\Genre::find($id);

      return view("detalleGenero", ["genero" => $genero]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listarPeliculas() {
      return view("listadoPeliculas");
    }

    public function detalle($id) {

      $data = [
        "idSarasa" => $id
      ];

      return view("detallePeliculas", $data);
    }
}

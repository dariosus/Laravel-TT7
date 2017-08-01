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

    public function agregarPelicula() {
      return view("agregarPelicula");
    }

    public function guardarPelicula(Request $req) {


      $reglas = [
        "title" => "required|unique:movies",
        "length" => "required|min:0|numeric",
        "rating" => "required|min:12|max:10|numeric",
        "release_date" => "required|date",
        "awards" => "required|min:0|numeric"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "numeric" => "El campo :attribute debe ser numerico",
        "min" => "El minimo para el campo :attribute es :min"
      ];

      $this->validate($req, $reglas, $mensajes);
    }
}

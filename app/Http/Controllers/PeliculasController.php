<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listarPeliculas() {
      $peliculas = \App\Pelicula::all();
      return view("listadoPeliculas", compact("peliculas"));
    }

    public function detalle($id) {

      $pelicula = \App\Pelicula::find($id);

      return view("detallePeliculas", compact("pelicula"));
    }

    public function agregarPelicula() {
      return view("agregarPelicula");
    }

    public function guardarPelicula(Request $req) {


      $reglas = [
        "title" => "required|unique:movies",
        "length" => "required|min:0|numeric",
        "rating" => "required|min:0|max:10|numeric",
        "release_date" => "required|date",
        "awards" => "required|min:0|numeric"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "numeric" => "El campo :attribute debe ser numerico",
        "min" => "El minimo para el campo :attribute es :min"
      ];

      $this->validate($req, $reglas, $mensajes);
      //$datos = $req->only("title", "rating", "awards", "length", "release_date");

      //\App\Pelicula::create($datos);

      $pelicula = new \App\Pelicula;
      $pelicula->title = $req->input("title");
      $pelicula->awards = $req->input("awards");
      $pelicula->release_date = $req->input("release_date");
      $pelicula->rating = $req->input("rating");
      $pelicula->length = $req->input("length");

      $pelicula->save();

      return redirect("/peliculas");
    }

    public function spiderman() {
      $pelicula = \App\Pelicula::find(22);

      $pelicula->awards = 53;

      $pelicula->save();
    }

    public function her() {
      $pelicula = \App\Pelicula::find(23);
      $pelicula->delete();
    }

    public function delete($id) {
      $pelicula = \App\Pelicula::find($id);
      $pelicula->delete();

      return redirect("/peliculas");
    }
}

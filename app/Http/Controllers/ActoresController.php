<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActoresController extends Controller
{
    public function listarActores() {
      $actores = \App\Actor::all();

      $data = compact("actores");

      return view("listarActores", $data);
    }

    public function detalle($id) {

      $actor = \App\Actor::find($id);
      //$actor->first_name = ":)";
      //$actor->save();

      $data = compact("actor");

      return view("detalleActor", $data);
    }

    public function theBest() {
      $actores = \App\Actor::where("rating", ">", 5)
        ->orderBy("rating", "DESC")
        ->get();

      $data = compact("actores");

      return view("listarActores", $data);
    }

    public function buscar(Request $req) {
      $buscador = $req->input("buscador");
      $actores = \App\Actor::where("first_name", "like", "%$buscador%")
        ->orWhere("last_name", "like", "%$buscador%")
        ->orderBy("rating", "DESC")
        ->get();

      $data = compact("actores");

      return view("listarActores", $data);
    }
}

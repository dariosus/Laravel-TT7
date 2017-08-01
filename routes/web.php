<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/agregarPelicula", "PeliculasController@agregarPelicula");
Route::post("/agregarPelicula", "PeliculasController@guardarPelicula");

Route::get("/actores", "ActoresController@listarActores");
Route::get("/actores/{id}", "ActoresController@detalle");
Route::get("/actoresBuenos", "ActoresController@theBest");
Route::post("/buscar", "ActoresController@buscar");

Route::get("/peliculas", "PeliculasController@listarPeliculas");

Route::get("/peliculas/{id}", "PeliculasController@detalle");

Route::get("/generos", "GenerosController@listarGeneros");

Route::get("/generos/{id}", "GenerosController@detalleGenero");


Route::get("/saludar/{nombre}/{apellido?}", function($nombre, $apellido = "Sin Apellido") {
  return "Hola $nombre $apellido";
});

Route::get('/registracion', function() {
  return view("registracion");
});

Route::post("/registracion", function() {
    return "Vine por post";
});


Route::get('/series/{num}', function($num) {
  return "Hola, esta es la serie $num";
});

Route::get("/dario", function() {
  return "HOLA DARIO";
});

Route::get('/', function () {
    return view('welcome');
});

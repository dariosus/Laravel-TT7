<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    protected $guarded = [];

    public function genero() {
      return $this->belongsTo("App\Genre", "genre_id");
    }

    public function actores() {
      return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }

    public function getNombreGenero() {
      if ($this->genero) {
        return $this->genero->name;
      }
      else {
        return "";
      }
    }
}

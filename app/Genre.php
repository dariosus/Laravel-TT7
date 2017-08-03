<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // protected $table = "generos";
    // protected $primaryKey = "idGeneros";
    // public $timestamps = false;
    public function peliculas() {
      return $this->hasMany("App\Pelicula", "genre_id");
    }
}

<?php

use Illuminate\Database\Seeder;

class agregarCenicienta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("movies")->insert([
          'title' => "Cenicienta",
          'awards' => 1,
          'rating' => 7,
          "length" => 120,
          "release_date" => "2017-10-03 10:00:00"
        ]);
    }
}

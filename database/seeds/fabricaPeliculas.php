<?php

use Illuminate\Database\Seeder;

class fabricaPeliculas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pelicula::class, 500)->create();
    }
}

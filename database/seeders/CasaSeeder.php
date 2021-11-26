<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Casas;

class CasaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Casas::create([
            'name'=>'Casa independiente',
            'description'=>'Vivienda particular de construcción fija que generalmente no comparte pared, techo o piso con otra vivienda',
             'terreno_size'=>'10X20m cuadrados'
        ]);

    }
}

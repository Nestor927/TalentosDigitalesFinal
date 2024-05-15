<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulos;

class AddArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articulos = Articulos::create([
            'descripcion'=> "Notebook",
            'precio'=> 2500000.99,
            
        ]);
        $articulos = Articulos::create([
            'descripcion'=> "Monitor",
            'precio'=> 100000.00,
            
        ]);

        $articulos = Articulos::create([
            'descripcion'=> "Impresoras",
            'precio'=> 100000.00,
            
        ]);


    }
}

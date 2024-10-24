<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Derecho de Familia',
            'slug' => 'derecho-de-familia',
            'codigo_color' => '#F7629B' 
        ]);

        Categoria::create([
            'nombre' => 'Derecho Laboral',
            'slug' => 'derecho-laboral',
            'codigo_color' => '#78BA1F' 
        ]);

        Categoria::create([
            'nombre' => 'Derecho Civil y Comercial',
            'slug' => 'derecho-civil-y-comercial',
            'codigo_color' => '#E9911C' 
        ]);

        Categoria::create([
            'nombre' => 'Derecho Administrativo y Previsional',
            'slug' => 'derecho-administrativo-y-previsional',
            'codigo_color' => '#0C87C4' 
        ]);
    }
}

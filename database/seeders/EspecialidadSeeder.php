<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::create([
            'nombre' => 'Derecho de Familia',
            'codigo_color' => '#F7629B' 
        ]);

        Especialidad::create([
            'nombre' => 'Derecho Laboral',
            'codigo_color' => '#78BA1F' 
        ]);

        Especialidad::create([
            'nombre' => 'Derecho Penal',
            'codigo_color' => '#E71616' 
        ]);

        Especialidad::create([
            'nombre' => 'Derecho Civil y Comercial',
            'codigo_color' => '#E9911C' 
        ]);

        Especialidad::create([
            'nombre' => 'Derecho Administrativo y Previsional',
            'codigo_color' => '#0C87C4' 
        ]);
    }
}

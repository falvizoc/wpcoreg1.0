<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use Illuminate\Database\Seeder;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etiqueta::create([
            'nombre' => 'Derecho de Familia',
            'slug' => 'derecho-de-familia',
        ]);

        Etiqueta::create([
            'nombre' => 'Derecho Laboral',
            'slug' => 'derecho-laboral',
        ]);

        Etiqueta::create([
            'nombre' => 'Derecho Civil y Comercial',
            'slug' => 'derecho-civil-y-comercial',
        ]);

        Etiqueta::create([
            'nombre' => 'Derecho Administrativo y Previsional',
            'slug' => 'derecho-administrativo-y-previsional',
        ]);
        
    }
}

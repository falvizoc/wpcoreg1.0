<?php

namespace Database\Seeders;

use App\Models\EstadoTarea;
use Illuminate\Database\Seeder;

class EstadoTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoTarea::create([
            'descripcion' => 'Pendiente',
            'color' => 'primary',
        ]);

        EstadoTarea::create([
            'descripcion' => 'En curso',
            'color' => 'warning',
        ]);

        EstadoTarea::create([
            'descripcion' => 'Finalizada',
            'color' => 'success',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\EstadoExpediente;
use Illuminate\Database\Seeder;

class EstadoExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoExpediente::create([
            'descripcion' => 'Pendiente',
            'color' => 'primary',
        ]);

        EstadoExpediente::create([
            'descripcion' => 'En curso',
            'color' => 'warning',
        ]);

        EstadoExpediente::create([
            'descripcion' => 'Controlar Resultado',
            'color' => 'danger',
        ]);

        EstadoExpediente::create([
            'descripcion' => 'Culminado',
            'color' => 'success',
        ]);
    }
}

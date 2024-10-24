<?php

namespace Database\Seeders;

use App\Models\Estado_bono_y_jus;
use Illuminate\Database\Seeder;

class EstadoBonoYJusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado_bono_y_jus::create([
            'descripcion' => 'No abonado'
        ]);

        Estado_bono_y_jus::create([
            'descripcion' => 'Abonado'
        ]);
    }
}

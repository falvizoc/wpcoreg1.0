<?php

namespace Database\Seeders;

use App\Models\Relevancia;
use Illuminate\Database\Seeder;

class RelevanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relevancia::create([
            'descripcion' => 'Sin Urgencia',
            'color' => 'primary',
        ]);

        Relevancia::create([
            'descripcion' => 'Media',
            'color' => 'warning',
        ]);

        Relevancia::create([
            'descripcion' => 'Urgente',
            'color' => 'danger',
        ]);
    }
}

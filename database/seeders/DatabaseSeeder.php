<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\EstadoTarea;
use App\Models\Etiqueta;
use App\Models\Relevancia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        # creao carpeta
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');

        $this->call(RoleSeeder::class);
        
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(EtiquetaSeeder::class);
        // $this->call(PostSeeder::class);
        $this->call(EstadoTareaSeeder::class);
        $this->call(RelevanciaSeeder::class);
        $this->call(EstadoBonoYJusSeeder::class);
        $this->call(EstadoExpedienteSeeder::class);

    }
}

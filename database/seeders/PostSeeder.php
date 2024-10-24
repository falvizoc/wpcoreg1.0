<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            # creo en la tabla intermedia un registro con etiqueta_id = a random entre 1 y 4 y luego con un id entre el 5 y 8
            $post->etiquetas()->attach([
                rand(1,4),
                rand(2,3),
            ]);
        }
    }
}

<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $titulo = $this->faker->unique()->sentence();

        return [
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'extracto' => $this->faker->text(250),
            'body' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1,2]),
            'categoria_id' => Categoria::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}

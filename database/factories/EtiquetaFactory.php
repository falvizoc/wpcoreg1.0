<?php

namespace Database\Factories;

use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EtiquetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Etiqueta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nombre = $this->faker->unique()->word(20);

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'color' => $this->faker->randomElement(['red','yellon','green','blue','purple','indigo','pink']),
        ];
    }
}

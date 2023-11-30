<?php

namespace Database\Factories;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarcaFactory extends Factory
{
    protected $model = Marca::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Marca $marca) {
            Producto::factory(8)->create(['marcaId' => $marca->id]);
        });
    }
}


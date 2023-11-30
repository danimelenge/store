<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Marca; // Asegúrate de importar el modelo Marca
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        $marca = Marca::factory()->create(); // Crea una marca

        return [
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'stock' => $this->faker->randomDigit(),
            'marcaId' => $marca->id, // Asigna el id de la marca creada
        ];
    }
}


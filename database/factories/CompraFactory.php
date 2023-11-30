<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    protected $model = Compra::class;

    public function definition()
    {
        // Define aquí cómo quieres generar datos para la compra
        return [
            'producto_id' => function () {
                return Producto::factory()->create()->id;
            },
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            // Otros campos de compra
        ];
    }
}


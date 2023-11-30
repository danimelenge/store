<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compra;
use Database\Factories\CompraFactory; // Asegúrate de tener la ruta correcta al factory

class CompraSeeder extends Seeder
{
    public function run()
    {
        // Utiliza el factory para crear datos de compra
        CompraFactory::factory(50)->create();
    }
}



<?php

use App\Models\User;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductoSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductoSeeder::class, // Asegúrate de que el seeder de Producto esté en el namespace correcto
        ]);

        // Crear relaciones entre usuarios y productos en la tabla de compras
        User::all()->each(function ($user) {
            $productos = Producto::inRandomOrder()->take(rand(1, 5))->get();
            $user->productos()->attach($productos);
        });
    }
}



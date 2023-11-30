<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{

    public function run(): void
    {
        Category::create(['name' => 'laptop']);
        Category::create(['name' => 'phone']);
        Category::create(['name' => 'tablet']);
    }
}

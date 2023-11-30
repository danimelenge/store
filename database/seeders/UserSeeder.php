<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'number_id' => '1107081767',
            'name' => 'Daniel',
            'last_name' => 'Melenge',
            'email' => 'danielmelenge@gmail.com',
            'password' => bcrypt(123456789),
            'remember_token' => Str::random(10)
        ]);
    }
}

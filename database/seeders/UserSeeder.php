<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pedro Holguín',
            'username' => 'pedrohc',
            'email' => 'holguinpedro90@gmail.com',
            'status' => 'Activo',
            'password' => bcrypt('12345'),
            'phone' => '903023713'
            ]);

        User::factory(99)->create();
    }
}

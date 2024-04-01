<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Admon.',
            'email' => 'admon@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Administrative',
        ]);

        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Teacher',
        ]);

        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Student',
        ]);
    }
}

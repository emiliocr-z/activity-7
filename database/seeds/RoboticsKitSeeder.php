<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registrar los tres kits de robótica proporcionados por el cliente
        RoboticsKit::create([
            'name' => 'StarterKit',
            // Otros campos según la estructura de tu tabla
        ]);

        RoboticsKit::create([
            'name' => 'Educational Robotics Kit',
            // Otros campos según la estructura de tu tabla
        ]);

        RoboticsKit::create([
            'name' => 'Kit5',
            // Otros campos según la estructura de tu tabla
        ]);
    }
}

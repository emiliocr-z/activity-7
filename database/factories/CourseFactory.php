<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'cover' => $this->faker->imageUrl,
            'content' => $this->faker->paragraph,
            'didactic_material' => $this->faker->text,
            // Otros campos según la estructura de tu tabla de cursos
        ];
    }
}

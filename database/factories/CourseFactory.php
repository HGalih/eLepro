<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word(3),
            'course' => $this->faker->word(2),
            'totalmeets' => 20,
            'level_id' => mt_rand(1,3),      
            'category_id' => mt_rand(1,3),      
            // 'course_prerequisite_id' => mt_rand(1,3),      
            'application' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(1) 
        ];
    }
}

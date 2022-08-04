<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classname' => $this->faker->word(1),
            'startdate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'description' => $this->faker->paragraph(1),
            'course_id' => mt_rand(1,3),      
            'location_id' => mt_rand(1,2),      
            'supervisor_id' => 1,      
            'classtype_id' => mt_rand(1,3),
                ];
    }
}

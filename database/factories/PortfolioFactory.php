<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => mt_rand(1,3),        
            'project_id' => mt_rand(1,3),        
            'project_title' => $this->faker->word(2,3),
            'url' => $this->faker->url(),
            'image' => '/upload/project/nopic.jpg',//.$this->faker->imageUrl(640,480,'Game Project',true),
            'description' => $this->faker->paragraph(1),
            'age' => mt_rand(8,14) 
        ];
    }
}

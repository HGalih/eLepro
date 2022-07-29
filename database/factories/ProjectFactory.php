<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_title' => $this->faker->word(2),
            'example_url' => $this->faker->url(),
            'application' => $this->faker->sentence(1),
            'image' => '/upload/project/nopic.jpg',//.$this->faker->imageUrl(640,480,'Game Project',true),
            'description' => $this->faker->sentence(1),
            'course_id' => mt_rand(1,3)        
        ];
    }
}

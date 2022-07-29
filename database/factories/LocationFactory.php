<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => 'Zoom',
            'url' => $this->faker->url(),
            'code' => $this->faker->word(1),
            'password' => $this->faker->password(2,6)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

class PriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pricename' => $this->faker->word(2),
            'normal_price' => $this->faker->numberBetween(1500000,3000000),
            'final_price' => $this->faker->numberBetween(1300000,280000),
            'description' => $this->faker->paragraph(1),
            'course_id' => mt_rand(1,5)        
        ];
    }
}

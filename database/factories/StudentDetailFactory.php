<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->firstName(),
            'phone' => $this->faker->phoneNumber(),
            'sosmed01' => $this->faker->word(),
            'sosmed02' => $this->faker->word(),
            'sosmed03' => $this->faker->word(),
            'gender' => $this->faker->randomElement(['male','female']),
            'birthdate' => $this->faker->date(),
            'nationality' => $this->faker->country(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postcode' => $this->faker->postcode(),
            'photo' => '/upload/student/nopic.jpg',
            'note01' => $this->faker->paragraph(1),
            'note02' => $this->faker->paragraph(1),
            'note03' => $this->faker->paragraph(1),
            'school_id' => mt_rand(1,3),  
            'status_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),  
        ];
    }
}

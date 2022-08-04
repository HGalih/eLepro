<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position_id' => mt_rand(1,3),
            'gender' => $this->faker->randomElement(['male','female']),
            'birthdate' => $this->faker->date(),
            'NIK' => $this->faker->creditCardNumber(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'country' => $this->faker->country(),
            'education' => $this->faker->word(),
            'photo' => '/upload/teacher/nopic.jpg',
            'sosmed01' => $this->faker->word(),
            'note01' => $this->faker->paragraph(1),
            'note02' => $this->faker->paragraph(1),
            'note03' => $this->faker->paragraph(1),
            'user_id'=> mt_rand(1,3),     
        ];
    }
}

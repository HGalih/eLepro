<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position_id' => mt_rand(1,3),
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['male','female']),
            'birthdate' => $this->faker->date(),
            'NIK' => $this->faker->creditCardNumber(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'country' => $this->faker->country(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(2,6),
            'education' => $this->faker->word(),
            'photo' => '/upload/teacher/nopic.jpg',
            'skill' => $this->faker->word(),
            'sosmed01' => $this->faker->word(),
            'note01' => $this->faker->paragraph(1),
            'note02' => $this->faker->paragraph(1),
            'note03' => $this->faker->paragraph(1)     
        ];
    }
}

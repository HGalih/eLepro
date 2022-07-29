<?php

namespace Database\Factories;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nickname' => $this->faker->firstName(),
            'phone' => $this->faker->phoneNumber(),
            'sosmed01' => $this->faker->word(),
            'sosmed02' => $this->faker->word(),
            'sosmed03' => $this->faker->word(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(2,6),
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
        ];
    }
}

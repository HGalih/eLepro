<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'position_id' => 1,
            'name' => "Laura",
            'gender' => 'female',
            'occupation' => 'lecturer',
            'birthdate' => "1981-01-01",
            'NIK' => '9999',
            'phone' => '+6281250205040',
            'address' => 'Citraland',
            'city' => 'Surabaya',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'email' => 'admin@cotha.com',
            'password' => 'cotha123',
            'education' => 'S2 Informatika',
            'photo' => '/upload/employee/laura.jpg',
            'bankaccount' => 'BCA an Laura',
            'sosmed01' => '',
            'note01' => 'Dosen Informatika - Universitas Ciputra Surabaya',
            // 'note02' => $this->faker->paragraph(1),
            // 'note03' => $this->faker->paragraph(1)     
        ]);
        DB::table('employees')->insert([
            'position_id' => 1,
            'name' => "Haning Galih",
            'gender' => 'male',
            'occupation' => 'student',
            'birthdate' => "2002-01-01",
            'NIK' => '9999',
            'phone' => '+6281357737545',
            'address' => 'Street',
            'city' => 'Ponorogo',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'email' => 'haning.grk@gmail.com',
            'password' => 'cotha123',
            'education' => 'S1 Informatika - onGoing',
            'photo' => '/upload/employee/haning.jpg',
            'bankaccount' => 'BCA an Siti Alfiyah',
            'sosmed01' => '',
            'note01' => 'kuliah di Jurusan Informatika - Universitas Ciputra Surabaya',
            // 'note02' => $this->faker->paragraph(1),
            // 'note03' => $this->faker->paragraph(1)     
        ]);
        DB::table('employees')->insert([
            'position_id' => 1,
            'name' => "Christina",
            'gender' => 'female',
            'occupation' => 'student',
            'birthdate' => "2002-01-01",
            'NIK' => '9999',
            'phone' => '+6282147439937',
            'address' => 'Street',
            'city' => 'Malang',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'email' => 'christinxmaria@gmail.com',
            'password' => 'cotha123',
            'education' => 'S1 Matematika - onGoing',
            'photo' => '/upload/employee/tina.jpg',
            'bankaccount' => 'BCA an Efilia Ang',
            'sosmed01' => '',
            'note01' => 'kuliah di Universitas Malang',
            // 'note02' => $this->faker->paragraph(1),
            // 'note03' => $this->faker->paragraph(1)     
        ]);
    }
}

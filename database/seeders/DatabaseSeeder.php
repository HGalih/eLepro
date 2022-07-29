<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Course;
use App\Models\School;
use App\Models\Classes;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Student;
use App\Models\Location;
use App\Models\Portfolio;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Location::factory(2)->create();
        //Course::factory(5)->create();
        Price::factory(6)->create();
        Project::factory(10)->create();
        School::factory(3)->create();
        Student::factory(10)->create();
        //Employee::factory(3)->create();
        Classes::factory(5)->create();

         // Portfolio::factory(15)->create();

    }
}

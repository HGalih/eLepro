<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Course;
use App\Models\School;
use App\Models\Classes;
use App\Models\EmployeeDetail;
use App\Models\Project;
use App\Models\Student;
use App\Models\Location;
use App\Models\Portfolio;
use App\Models\User;

use App\Models\Staff;
use App\Models\StudentDetail;

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
        User::factory(10)->create();
        $this->call([
            StudentStatusSeeder::class,
            SchoolStatusSeeder::class,
            TransactionPurposeSeeder::class,
            CourseLevelSeeder::class,
            ClassStatusSeeder::class,
            ClasstypeSeeder::class,
            CourseCategorySeeder::class,
            CourseLevelSeeder::class,
            CourseSeeder::class,
            EmployeePositionSeeder::class,
            LanguageSeeder::class,
            ScheduleSeeder::class,
            TransactionSeeder::class
        ]);
        Location::factory(2)->create();
        //Course::factory(5)->create();
        Price::factory(6)->create();
        Project::factory(10)->create();
        School::factory(3)->create();
        StudentDetail::factory(10)->create();
        EmployeeDetail::factory(3)->create();
        Classes::factory(5)->create();

         // Portfolio::factory(15)->create();

    }
}

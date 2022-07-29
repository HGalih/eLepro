<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_levels')->insert([
            'level'=>'Beginner',
            'description'=>'',
        ]);
        DB::table('course_levels')->insert([
            'level'=>'Intermediate',
            'description'=>'',
        ]);
        DB::table('course_levels')->insert([
            'level'=>'Advance',
            'description'=>'',
        ]);
        DB::table('course_levels')->insert([
            'level'=>'Master',
            'description'=>'',
        ]);
    }
}

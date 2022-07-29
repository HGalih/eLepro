<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_skills')->insert([
            'skill'=>'Scratch',
            'description'=>'Block Coding',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Counstruct 3',
            'description'=>'Block Coding',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Thunkable',
            'description'=>'Block Coding',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Python',
            'description'=>'Text Coding',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'FlipAClip',
            'description'=>'Animation',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Canva',
            'description'=>'Multimedia',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Photopea / Photoshop',
            'description'=>'Multimedia',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'inShot',
            'description'=>'Multimedia',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Adobe Premiere',
            'description'=>'Multimedia',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Blender',
            'description'=>'Multimedia',
        ]);        
        DB::table('employee_skills')->insert([
            'skill'=>'Google Sites',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Google Sites',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Wordpress',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'HTML',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'CSS',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Bootstrap',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'JQuery',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'PHP',
            'description'=>'Web Development',
        ]);
        DB::table('employee_skills')->insert([
            'skill'=>'Database SQL',
            'description'=>'Web Development',
        ]);

    }
}

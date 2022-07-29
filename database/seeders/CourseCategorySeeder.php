<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_categories')->insert([
            'category'=>'Block Coding',
            'description'=>'Coding game menggunakan perintah block dengan Scratch atau Construct',
        ]);
        DB::table('course_categories')->insert([
            'category'=>'Mobile App Development',
            'description'=>'Coding aplikasi untuk handphone dengan Thunkable',
        ]);
        DB::table('course_categories')->insert([
            'category'=>'Text Based Coding',
            'description'=>'Coding game menggunakan perintah text dengan Python',
        ]);
        DB::table('course_categories')->insert([
            'category'=>'Animation',
            'description'=>'Pembuatan animasi dengan menggunakan FlipAClip dan Blender',
        ]);
        DB::table('course_categories')->insert([
            'category'=>'Web Development',
            'description'=>'Pemrograman website dari dasar menggunakan framework hingga mahir menggunakan HTML dan CSS',
        ]);
        DB::table('course_categories')->insert([
            'category'=>'Multimedia',
            'description'=>'Menguasai aplikasi multimedia dan membuat berbagai multimedia project',
        ]);
    }
}

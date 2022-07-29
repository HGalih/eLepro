<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        'code' => 'BBC',
        'course' => 'Basic Block Coding for Game Development',
        'totalmeets' => 20,
        'age_requirement' => '7-16 tahun',
        'level_id' => 1,      
        'category_id' => 1,      
        // 'course_prerequisite_id' => mt_rand(1,3),      
        'application' => 'Scratch',
        'description' => 'Mau tahu cara buat game sendiri? 
        Melalui course ini kamu akan belajar bagaimana membuat game dari dasar hingga mahir. 
        Saat membuat game ini, secara tidak langsung kamu akan belajar dasar-dasar algoritma pemrograman yang merupakan bagian dari Computational Thinking yang sangat penting. 
        Dan tak lupa, game yang kamu buat nantinya bisa diakses online sehingga bisa dimainkan bersama teman-teman kamu.'
        ]);

        DB::table('courses')->insert([
            'code' => 'ABCG',
            'course' => 'Advance Block Coding for Game Development',
            'totalmeets' => 20,
            'age_requirement' => '7-16 tahun',
            'level_id' => 2,
            'category_id' => 1,      
            'course_prerequisite_id' => 1,      
            'application' => 'Scratch & Construct',
            'description' => 'Yuk bikin game 2D yang keren dan canggih tampilannya. 
            Melalui course ini kamu akan belajar mengembangkan kemampuan coding kamu dengan membuat berbagai game yang super keren.
            Tingkat kesulitan yang ada di game ini tentunya lebih berat dibandingkan course di level sebelumnya. 
            Saat membuat game ini kemampuan Computational Thinking kamu akan lebih diasah lagi dengan berfokus pada penguasaan Logical Thinking dan Problem Solving. 
            Dan tentu saja, game yang kamu buat juga bisa diakses online bahkan bisa dimainkan secara bersamaan (multiplayer) bersama teman-teman kamu.'
            ]);

            
        DB::table('courses')->insert([
            'code' => 'ABCM',
            'course' => 'Advance Block Coding for Mobile App Development',
            'totalmeets' => 20,
            'age_requirement' => '10-16 tahun',
            'level_id' => 2,
            'category_id' => 2,      
            'course_prerequisite_id' => 1,      
            'application' => 'Thunkable',
            'description' => 'Mau tahu cara buat aplikasi untuk handphone? 
            Di masa depan, bahkan saat ini handphone akan semakin banyak digunakan. Baik dari hal sederhana seperti bermain atau berbelanja hingga untuk mengatur bisnis. 
            Karena itu akan sangat berguna bila dari kecil sudah mulai memahami dan bahkan bisa membuat mobile application untuk dijalankan di handphone.
            Apakah susah? Tidak susah kok, tapi yang pasti mengasah imajinasi dan kemampuan Logical Thinking yang merupakan bagian dari kemampuan Computational Thinking.'
        ]);

        DB::table('courses')->insert([
            'code' => 'TBC',
            'course' => 'Text Based Coding',
            'totalmeets' => 20,
            'age_requirement' => '10-16 tahun',
            'level_id' => 2,
            'category_id' => 3,      
            'course_prerequisite_id' => 1,      
            'application' => 'Python',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'DIE',
            'course' => 'Digital Image Editing',
            'totalmeets' => 10,
            'age_requirement' => '10-16 tahun',
            'level_id' => 1,
            'category_id' => 6,      
            // 'course_prerequisite_id' => 1,      
            'application' => 'Canva & Photopea',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'DVE',
            'course' => 'Digital Video Editing',
            'totalmeets' => 10,
            'age_requirement' => '10-16 tahun',
            'level_id' => 1,
            'category_id' => 6,      
            // 'course_prerequisite_id' => 1,      
            'application' => 'Canva & Photopea',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'ANIM',
            'course' => 'Animation Development',
            'totalmeets' => 10,
            'age_requirement' => '7-16 tahun',
            'level_id' => 1,
            'category_id' => 4,      
            // 'course_prerequisite_id' => 1,      
            'application' => 'FlipAClip',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'WEBI',
            'course' => 'Instant Web Development',
            'totalmeets' => 10,
            'age_requirement' => '10-16 tahun',
            'level_id' => 1,
            'category_id' => 5,      
            // 'course_prerequisite_id' => 1,      
            'application' => 'Google Sites',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'WEBA',
            'course' => 'Basic Web Development',
            'totalmeets' => 10,
            'age_requirement' => '10-16 tahun',
            'level_id' => 1,
            'category_id' => 5,      
            'course_prerequisite_id' => 8,      
            'application' => 'Wordpress',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);

        DB::table('courses')->insert([
            'code' => 'WEBOS',
            'course' => 'Static Web Programming',
            'totalmeets' => 10,
            'age_requirement' => '13-16 tahun',
            'level_id' => 1,
            'category_id' => 5,      
            'course_prerequisite_id' => 8,      
            'application' => 'HTML, CSS, Bootstrap, JQuery',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);        

        DB::table('courses')->insert([
            'code' => 'WEBOD',
            'course' => 'Dynamic Web Programming',
            'totalmeets' => 20,
            'age_requirement' => '13-16 tahun',
            'level_id' => 1,
            'category_id' => 5,      
            'course_prerequisite_id' => 10,      
            'application' => 'HTML, CSS, Bootstrap, PHP, Database, SQL',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur voluptates repellat, minima vitae nesciunt alias voluptas similique nobis magnam.'
        ]);        

    }
}

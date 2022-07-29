<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('student_statuses')->insert([
            'status'=>'Active',
            'description'=>'',
        ]);
        DB::table('student_statuses')->insert([
            'status'=>'Inactive',
            'description'=>'',
        ]);
        DB::table('student_statuses')->insert([
            'status'=>'Alumnus',
            'description'=>'',
        ]);
        DB::table('student_statuses')->insert([
            'status'=>'Leads',
            'description'=>'',
        ]);       
    }
}

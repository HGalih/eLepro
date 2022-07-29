<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_statuses')->insert([
            'school_status'=>'Nasional'
        ]);
        DB::table('school_statuses')->insert([
            'school_status'=>'Nasional Plus'
        ]);
        DB::table('school_statuses')->insert([
            'school_status'=>'Negeri'
        ]);
        DB::table('school_statuses')->insert([
            'school_status'=>'Madrasah'
        ]);
    }
}

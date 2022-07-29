<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_statuses')->insert([
            'status'=>'reguler meeting',
            'description'=>''
        ]);
        DB::table('class_statuses')->insert([
            'status'=>'extra meeting',
            'description'=>''
        ]);
    }
}

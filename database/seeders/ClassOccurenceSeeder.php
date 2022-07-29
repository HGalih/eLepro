<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassOccurenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_occurences')->insert([
            'occurence'=>'booked',
            'description'=>''
        ]);
        DB::table('class_occurences')->insert([
            'occurence'=>'done',
            'description'=>''
        ]);
        DB::table('class_occurences')->insert([
            'occurence'=>'canceled',
            'description'=>''
        ]);
    }
}

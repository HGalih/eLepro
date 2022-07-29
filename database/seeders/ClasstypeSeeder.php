<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasstypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classtypes')->insert([
            'classtype'=>'Private',
            'maxstudents'=>1,
            'description'=>''
        ]);
        DB::table('classtypes')->insert([
            'classtype'=>'Small Group',
            'maxstudents'=>4,
            'description'=>''
        ]);
        DB::table('classtypes')->insert([
            'classtype'=>'Big Group',
            'maxstudents'=>8,
            'description'=>''
        ]);
        DB::table('classtypes')->insert([
            'classtype'=>'Large Group',
            'maxstudents'=>100,
            'description'=>''
        ]);
    }
}

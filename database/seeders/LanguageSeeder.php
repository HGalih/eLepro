<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'lang'=>'ID',
            'language'=>'Bahasa Indonesia',
        ]);
        DB::table('languages')->insert([
            'lang'=>'EN',
            'language'=>'English',
        ]);
        DB::table('languages')->insert([
            'lang'=>'CMN',
            'language'=>'Mandarin',
        ]);
    }
}

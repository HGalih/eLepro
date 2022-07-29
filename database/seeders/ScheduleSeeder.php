<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SENIN ------------------------------
        
        DB::table('schedules')->insert([
            'day'=>'Senin',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Senin',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Senin',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Senin',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Senin',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);    


        // Selasa ------------------------------
        
        DB::table('schedules')->insert([
            'day'=>'Selasa',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Selasa',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Selasa',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Selasa',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Selasa',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);    


        // Rabu ------------------------------
        
        DB::table('schedules')->insert([
            'day'=>'Rabu',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Rabu',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Rabu',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Rabu',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Rabu',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);    


        // Kamis ------------------------------
        
        DB::table('schedules')->insert([
            'day'=>'Kamis',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Kamis',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Kamis',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Kamis',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Kamis',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);    


        // Jumat ------------------------------
        
        DB::table('schedules')->insert([
            'day'=>'Jumat',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Jumat',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Jumat',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Jumat',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Jumat',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);    



        // Sabtu ------------------------------

        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'08:00',
            'endtime'=>'09:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'09:30',
            'endtime'=>'10:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'11:00',
            'endtime'=>'12:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Sabtu',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);

        // Minggu ------------------------------

        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'08:00',
            'endtime'=>'09:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'09:30',
            'endtime'=>'10:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'11:00',
            'endtime'=>'12:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'13:00',
            'endtime'=>'14:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'14:30',
            'endtime'=>'15:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'16:00',
            'endtime'=>'17:00'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'17:30',
            'endtime'=>'18:30'
        ]);
        DB::table('schedules')->insert([
            'day'=>'Minggu',
            'starttime'=>'19:00',
            'endtime'=>'20:00'
        ]);        
    }
}

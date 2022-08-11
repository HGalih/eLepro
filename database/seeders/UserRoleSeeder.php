<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'role'=>'Employee'
        ]);
        DB::table('user_roles')->insert([
            'role'=>'Student'
        ]);
        DB::table('users')->insert([
            'name'=>'Master Admin',
            'email'=>'admin@cotha.id',
            'password'=>Hash::make("cotha2022"),
            'role'=>1

        ]);
        DB::table('employee_details')->insert([
            'user_id'=>1,
            'position_id'=>3,
            'gender'=>'male',
            'NIK'=>'MasterNIK',
            'phone'=>'081357737545',
            'city'=>'Ponorogo',
            'province'=>'Jawa Timur',
            'education'=>'master',

        ]);
    }
}

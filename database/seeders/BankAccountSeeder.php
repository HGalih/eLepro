<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_accounts')->insert([
            'bankname'=>'BCA',
            'accountnumber'=>'6170217070',
            'ownername'=>'Andi Setiawan',
            'is_income_account'=>1
        ]);
        DB::table('bank_accounts')->insert([
            'bankname'=>'Midtrans',
            'accountnumber'=>'6170217070',
            'ownername'=>'Cotha Bitori',
            'is_income_account'=>1
        ]);
        DB::table('bank_accounts')->insert([
            'bankname'=>'BCA',
            'accountnumber'=>'123456789',
            'ownername'=>'Efilia Ang',
            'is_income_account'=>0
        ]);
    }
}

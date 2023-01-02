<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([

            [
                'transaction_id' => 1,
                'user_id' => 3
            ],

            [
                'transaction_id' => 2,
                'user_id' => 1
            ],

            [
                'transaction_id' => 3,
                'user_id' => 2
            ]
        ]);
    }
}

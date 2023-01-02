<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([

            [
                'product_id' => 3,
                'qty' => 1,
                'total_price' => 125000,
                'transaction_date' => Carbon::create('2022', '12', '1')
            ],

            [
                'product_id' => 5,
                'qty' => 2,
                'total_price' => 220000,
                'transaction_date' => Carbon::create('2022', '12', '1')
            ],

            [
                'product_id' => 1,
                'qty' => 5,
                'total_price' => 750000,
                'transaction_date' => Carbon::create('2022', '12', '1')
            ]

            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_products')->insert([

            [
                'transaction_id' => 1,
                'product_id' => 3,
                'qty' => 2,
                'subprice' => 250000
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([

            [
                'user_id' => 2,
                'product_id' => 5,
                'qty_cart' => 1
            ]

            
        ]);
    }
}

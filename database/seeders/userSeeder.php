<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'email' => 'nadzlaandrita@gmail.com',
                'password' => 'baskom123',
                'username' => 'nadzlaandrita',
                'phone_number' => '021123456',
                'address' => 'jl. flaminggo no 17'
            ],

            [
                'email' => 'vincent@gmail.com',
                'password' => 'jeruk321',
                'username' => 'vincent321',
                'phone_number' => '021123444',
                'address' => 'jl. nuri no 01'
            ],

            [
                'email' => 'joelrizky@gmail.com',
                'password' => 'belimbing345',
                'username' => 'joelrizky',
                'phone_number' => '021123000',
                'address' => 'jl. rubah no 05'
            ]


        ]);
    }
}

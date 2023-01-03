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
            ]


        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([

            [
                'email' => 'admin@google.com',
                'password' => 'qwerty123',
                'username' => 'admin1'
                
            ]

        ]);
    }
}

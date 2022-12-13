<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'name'=>'Black Man Jacket',
                'size'=>'XL',
                'price'=>150000,
                'quantity'=>30,
                'image'=>'black_man_jacket.jpg'
            ],

            [
                'name'=>'Blue Man Jacket',
                'size'=>'XL',
                'price'=>150000,
                'quantity'=>30,
                'image'=>'blue_man_jacket.jpg'
            ],

            [
                'name'=>'Brown Man Short',
                'size'=>'L',
                'price'=>125000,
                'quantity'=>30,
                'image'=>'brown_man_short.jpg'
            ],

            [
                'name'=>'Flower Baby Dress',
                'size'=>'M',
                'price'=>100000,
                'quantity'=>30,
                'image'=>'flower_baby_dress.jpg'
            ],

            [
                'name'=>'Green Baby Dress',
                'size'=>'L',
                'price'=>110000,
                'quantity'=>30,
                'image'=>'green_baby_cloth.jpg'
            ],

            [
                'name'=>'Green Woman Blazer',
                'size'=>'XL',
                'price'=>250000,
                'quantity'=>30,
                'image'=>'green_blazer.jpg'
            ],

            [
                'name'=>'Green Man Shirt',
                'size'=>'S',
                'price'=>150000,
                'quantity'=>30,
                'image'=>'green_man_shirt.jpg'
            ],

            [
                'name'=>'Green Woman Overall',
                'size'=>'XL',
                'price'=>280000,
                'quantity'=>30,
                'image'=>'green_overall.jpg'
            ],

            [
                'name'=>'Green Woman Pants',
                'size'=>'L',
                'price'=>200000,
                'quantity'=>30,
                'image'=>'green_trouser.jpg'
            ],

            [
                'name'=>'Green One Set',
                'size'=>'XL',
                'price'=>290000,
                'quantity'=>30,
                'image'=>'green_woman_set.jpg'
            ],

            [
                'name'=>'Lime Baby Dress',
                'size'=>'M',
                'price'=>120000,
                'quantity'=>30,
                'image'=>'lime_baby_dress.jpg'
            ],

            [
                'name'=>'Lime Woman Skirt',
                'size'=>'M',
                'price'=>125000,
                'quantity'=>30,
                'image'=>'lime_skirt.jpg'
            ],

            [
                'name'=>'Black Man Jacket',
                'size'=>'XL',
                'price'=>150000,
                'quantity'=>30,
                'image'=>'black_man_jacket.jpg'
            ]
        ]);
    }
}

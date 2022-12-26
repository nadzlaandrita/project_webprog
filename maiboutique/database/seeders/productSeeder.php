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
                'qty'=>30,
                'image'=>'black_man_jacket.jpg'
            ],

            [
                'name'=>'Blue Man Jacket',
                'size'=>'XL',
                'price'=>150000,
                'qty'=>30,
                'image'=>'blue_man_jacket.jpg'
            ],

            [
                'name'=>'Brown Man Short',
                'size'=>'L',
                'price'=>125000,
                'qty'=>30,
                'image'=>'brown_man_short.jpg'
            ],

            [
                'name'=>'Flower Baby Dress',
                'size'=>'M',
                'price'=>100000,
                'qty'=>30,
                'image'=>'flower_baby_dress.jpg'
            ],

            [
                'name'=>'Green Baby Dress',
                'size'=>'L',
                'price'=>110000,
                'qty'=>30,
                'image'=>'green_baby_cloth.jpg'
            ],

            [
                'name'=>'Green Woman Blazer',
                'size'=>'XL',
                'price'=>250000,
                'qty'=>30,
                'image'=>'green_blazer.jpg'
            ],

            [
                'name'=>'Green Man Shirt',
                'size'=>'S',
                'price'=>150000,
                'qty'=>30,
                'image'=>'green_man_shirt.jpg'
            ],

            [
                'name'=>'Green Woman Overall',
                'size'=>'XL',
                'price'=>280000,
                'qty'=>30,
                'image'=>'green_overall.jpg'
            ],

            [
                'name'=>'Green Woman Pants',
                'size'=>'L',
                'price'=>200000,
                'qty'=>30,
                'image'=>'green_trouser.jpg'
            ],

            [
                'name'=>'Green One Set',
                'size'=>'XL',
                'price'=>290000,
                'qty'=>30,
                'image'=>'green_woman_set.jpg'
            ],

            [
                'name'=>'Lime Baby Dress',
                'size'=>'M',
                'price'=>120000,
                'qty'=>30,
                'image'=>'lime_baby_dress.jpg'
            ],

            [
                'name'=>'Lime Woman Skirt',
                'size'=>'M',
                'price'=>125000,
                'qty'=>30,
                'image'=>'lime_skirt.jpg'
            ],

            [
                'name'=>'Green Man Pants',
                'size'=>'XL',
                'price'=>250000,
                'qty'=>30,
                'image'=>'matcha_man_pants.jpg'
            ],

            [
                'name'=>'Pink Baby Dress',
                'size'=>'S',
                'price'=>200000,
                'qty'=>30,
                'image'=>'pink_baby_dress.jpg'
            ],

            [
                'name'=>'White Woman Blazer',
                'size'=>'XL',
                'price'=>299000,
                'qty'=>30,
                'image'=>'white_blazer.jpg'
            ],

            [
                'name'=>'White Woman Skirt',
                'size'=>'M',
                'price'=>230000,
                'qty'=>30,
                'image'=>'white_skirt.jpg'
            ],

            [
                'name'=>'Yellow Man Shirt',
                'size'=>'M',
                'price'=>180000,
                'qty'=>30,
                'image'=>'yellow_man_shirt.jpg'
            ]

        ]);
    }
}

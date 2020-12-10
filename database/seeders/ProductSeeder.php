<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>'A smartphone with 4gb ram and much more features.',
                'category'=>'Mobile',
                'gallery'=>'https://www.pngfind.com/pngs/m/97-973432_new-model-oppo-mobile-png-images-for-photoshop.png'
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'400',
                'description'=>'A smart TV with much more features.',
                'category'=>'TV',
                'gallery'=>'https://sep.yimg.com/ay/yhst-39276693957820/panasonic-th-32d330m-32-multi-system-led-tv-ntsc-pal-110-220-240-volts-50-60-hz-20.gif'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'500',
                'description'=>'A smart TV with much more features.',
                'category'=>'TV',
                'gallery'=>'https://www.pngkit.com/png/full/256-2566892_sony-bravia-32-led-tv-sony-40-inch.png'
            ],
            [
                'name'=>'Panasonic Fridge',
                'price'=>'700',
                'description'=>'A fridge with much more features.',
                'category'=>'Fridge',
                'gallery'=>'https://www.pinclipart.com/picdir/big/325-3257207_lg-refrigerator-transparent-png-refrigerador-door-in-door.png'
            ],
        ]);
    }
}

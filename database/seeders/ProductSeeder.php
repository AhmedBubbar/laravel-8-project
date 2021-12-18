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
        DB::table('products')->insert([
            'name'=>'LG Mobile',
            "price"=>"10000",
            "description"=>"A smart phone with 4gb ram and much more features",
            "category"=>"mobile",
            "gellary"=>"https://cdn1.smartprix.com/rx-iRnL8maCk-w1200-h1200/lg-g4-beat.jpg",


        ]);
    }
}

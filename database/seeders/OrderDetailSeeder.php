<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('order_details')->insert([
            ['order_id' => 1, 'product_id' => 1, 'quantity' => 1, 'price' => 329000],
            ['order_id' => 1, 'product_id' => 2, 'quantity' => 1, 'price' => 155000],
            ['order_id' => 2, 'product_id' => 1, 'quantity' => 1, 'price' => 329000],
            ['order_id' => 3, 'product_id' => 2, 'quantity' => 1, 'price' => 155000],
            ['order_id' => 4, 'product_id' => 2, 'quantity' => 1, 'price' => 155000],
            ['order_id' => 5, 'product_id' => 5, 'quantity' => 1, 'price' => 347000],
            ['order_id' => 6, 'product_id' => 6, 'quantity' => 1, 'price' => 276000],
            ['order_id' => 7, 'product_id' => 4, 'quantity' => 1, 'price' => 150000],
            ['order_id' => 8, 'product_id' => 13, 'quantity' => 1, 'price' => 270000],
            ['order_id' => 9, 'product_id' => 5, 'quantity' => 1, 'price' => 347000],
            ['order_id' => 10, 'product_id' => 8, 'quantity' => 1, 'price' => 150000],
            ['order_id' => 11, 'product_id' => 20, 'quantity' => 1, 'price' => 250000],
            ['order_id' => 12, 'product_id' => 8, 'quantity' => 1, 'price' => 150000],
            ['order_id' => 13, 'product_id' => 9, 'quantity' => 1, 'price' => 259000],
            ['order_id' => 14, 'product_id' => 12, 'quantity' => 1, 'price' => 250000],
            ['order_id' => 15, 'product_id' => 14, 'quantity' => 1, 'price' => 375000],
            ['order_id' => 16, 'product_id' => 9, 'quantity' => 1, 'price' => 259000],
            ['order_id' => 17, 'product_id' => 9, 'quantity' => 1, 'price' => 259000],
            ['order_id' => 18, 'product_id' => 12, 'quantity' => 1, 'price' => 250000],
            ['order_id' => 19, 'product_id' => 15, 'quantity' => 1, 'price' => 875000],
            ['order_id' => 20, 'product_id' => 21, 'quantity' => 1, 'price' => 150000],
        ]);
        
        
    }
}

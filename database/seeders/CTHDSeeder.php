<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thêm dữ liệu mới
        $this->seedData();
    }
    private function seedData()
    {
        $faker = Faker::create();

        order_details::create([ //1+2 : idsp
            'id' => 1,
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 329000,
        ]);
        order_details::create([ //1+2 : idsp
            'id' => 2,
            'order_id' => 1,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 155000,
        ]);
        order_details::create([ //1 : idsp
            'id' => 3,
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 329000,
        ]);
        order_details::create([ //2 : idsp
            'id' => 4,
            'order_id' => 3,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 155000,
        ]);
        order_details::create([ //2 : idsp
            'id' => 5,
            'order_id' => 4,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 155000,
        ]);
        order_details::create([ //5 : idsp
            'id' => 6,
            'order_id' => 5,
            'product_id' => 5,
            'quantity' => 1,
            'price' => 347000,
        ]);
        order_details::create([ //6 : idsp
            'id' => 7,
            'order_id' => 6,
            'product_id' => 6,
            'quantity' => 1,
            'price' => 276000,
        ]);
        order_details::create([ //4 : idsp
            'id' => 8,
            'order_id' => 7,
            'product_id' => 4,
            'quantity' => 1,
            'price' => 150000,
        ]);
        order_details::create([ //13 : idsp
            'id' => 9,
            'order_id' => 8,
            'product_id' => 13,
            'quantity' => 1,
            'price' => 270000,
        ]);
        order_details::create([ //5 : idsp
            'id' => 10,
            'order_id' => 9,
            'product_id' => 5,
            'quantity' => 1,
            'price' => 347000,
        ]);
        order_details::create([ //8 : idsp
            'id' => 11,
            'order_id' => 10,
            'product_id' => 8,
            'quantity' => 1,
            'price' => 150000,
        ]);
        order_details::create([ //20 : idsp
            'id' => 12,
            'order_id' => 11,
            'product_id' => 20,
            'quantity' => 1,
            'price' => 250000,
        ]);
        order_details::create([ //8 : idsp
            'id' => 13,
            'order_id' => 12,
            'product_id' => 8,
            'quantity' => 1,
            'price' => 150000,
        ]);
        order_details::create([ //9 : idsp
            'id' => 14,
            'order_id' => 13,
            'product_id' => 9,
            'quantity' => 1,
            'price' => 259000,
        ]);
        order_details::create([ //12 : idsp
            'id' => 15,
            'order_id' => 14,
            'product_id' => 12,
            'quantity' => 1,
            'price' => 250000,
        ]);
        order_details::create([ //14 : idsp
            'id' => 16,
            'order_id' => 15,
            'product_id' => 14,
            'quantity' => 1,
            'price' => 375000,
        ]);
        order_details::create([ //9 : idsp
            'id' => 17,
            'order_id' => 16,
            'product_id' => 9,
            'quantity' => 1,
            'price' => 259000,
        ]);
        order_details::create([ //9 : idsp
            'id' => 18,
            'order_id' => 17,
            'product_id' => 9,
            'quantity' => 1,
            'price' => 259000,
        ]);
        order_details::create([ //12 : idsp
            'id' => 19,
            'order_id' => 18,
            'product_id' => 12,
            'quantity' => 1,
            'price' => 250000,
        ]);
        order_details::create([ //15 : idsp
            'id' => 20,
            'order_id' => 19,
            'product_id' => 15,
            'quantity' => 1,
            'price' => 875000,
        ]);
        order_details::create([ //21 : idsp
            'id' => 21,
            'order_id' => 20,
            'product_id' => 21,
            'quantity' => 1,
            'price' => 150000,
        ]);
    }
}

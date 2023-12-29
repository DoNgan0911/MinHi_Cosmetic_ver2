<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\product_reviews;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        product_reviews::create([
            'id' => 1,
            'product_id' => 1,
            'user_id' => 2,
            'review' => 'Sản phẩm dùng tốt lắm, kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 2,
            'product_id' => 1,
            'user_id' => 2,
            'review' => 'Đóng gói cần thận, kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 3,
            'product_id' => 5,
            'user_id' => 2,
            'review' => 'Đóng gói cần thận',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 4,
            'product_id' => 4,
            'user_id' => null,
            'review' => 'Đóng gói cần thận, kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 5,
            'product_id' => 5,
            'user_id' => 4,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 6,
            'product_id' => 6,
            'user_id' => null,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 7,
            'product_id' => 5,
            'user_id' => 5,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 8,
            'product_id' => 5,
            'user_id' => 6,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 9,
            'product_id' => 15,
            'user_id' => 7,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 10,
            'product_id' => 16,
            'user_id' => 8,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 11,
            'product_id' => 18,
            'user_id' => 5,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 12,
            'product_id' => 19,
            'user_id' => 6,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 13,
            'product_id' => 20,
            'user_id' => 7,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 14,
            'product_id' => 20,
            'user_id' => 8,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
        product_reviews::create([
            'id' => 15,
            'product_id' => 20,
            'user_id' => 6,
            'review' => 'Kiềm dầu tốt',
            'rating' => 5,
            'status' => 1,
        ]);
    }
    
}

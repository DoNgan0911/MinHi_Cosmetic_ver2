<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([
            [
                'name' => 'Trần Hồng Đào',
                'date' => '2023/11/20',
                'address' => 'Thôn Tân Lập - Xã Tân Lân - huyện Cần Đước - Long An',
                'phone' => '0965 432 111',
                'status' => 'Đã đặt hàng',
                'enable' => 1,
                'total' => 484000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 2,
            ],
            [
                'name' => 'Nguyễn Hồng Thúy',
                'date' => '2023/11/21',
                'address' => 'số 26 - đường Nguyễn Gia Trí - phường 10 - quận Gò Vấp - Hồ Chí Minh',
                'phone' => '0345 422 121',
                'status' => 'Đã đặt hàng',
                'enable' => 1,
                'total' => 329000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 2,
            ],
            [
                'name' => 'Huỳnh Thị Hồng Thắm',
                'date' => '2023/11/30',
                'address' => 'số 15 - đường Nguyễn Hữu Trí - phường 10 - quận Bình Thạnh - Hồ Chí Minh',
                'phone' => '0346 432 121',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 155000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 2,
            ],
            [
                'name' => 'Nguyễn Ngọc Minh',
                'date' => '2023/12/05',
                'address' => 'số 10 - đường Lê Lợi - phường 2 - quận 3 - Hồ Chí Minh',
                'phone' => '0987 654 321',
                'status' => 'Đã đặt hàng',
                'enable' => 1,
                'total' => 420000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 2,
            ],
            [
                'name' => 'Lê Thị Hương',
                'date' => '2023/12/07',
                'address' => 'số 30 - đường Trần Phú - phường 7 - quận 5 - Hồ Chí Minh',
                'phone' => '0978 123 456',
                'status' => 'Đang giao hàng',
                'enable' => 1,
                'total' => 300000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 2,
            ],
            [
                 
                'name' => 'Phạm Văn Hoàng',
                'date' => '2023/12/10',
                'address' => 'số 45 - đường Trần Hưng Đạo - phường 10 - quận 1 - Hồ Chí Minh',
                'phone' => '0912 345 678',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 250000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 3,
            ],
            [
                
                'name' => 'Nguyễn Văn Hải',
                'date' => '2023/12/12',
                'address' => 'số 5 - đường Nam Kỳ Khởi Nghĩa - phường Bến Nghé - quận 1 - Hồ Chí Minh',
                'phone' => '0909 987 654',
                'status' => 'Thành công',
                'enable' => 1,
                'total' => 520000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 3,
            ],
            [
                
                'name' => 'Trương Minh Tuấn',
                'date' => '2023/12/15',
                'address' => 'số 15 - đường Nguyễn Thị Minh Khai - phường Đa Kao - quận 1 - Hồ Chí Minh',
                'phone' => '0981 234 567',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 390000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 3,
            ],
            [
                
                'name' => 'Lý Thị Thu',
                'date' => '2023/12/18',
                'address' => 'số 20 - đường Hai Bà Trưng - phường Bến Nghé - quận 1 - Hồ Chí Minh',
                'phone' => '0967 891 234',
                'status' => 'Đang giao hàng',
                'enable' => 1,
                'total' => 440000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 3,
            ],
            [
                
                'name' => 'Võ Minh Trí',
                'date' => '2023/12/20',
                'address' => 'số 25 - đường Nguyễn Thị Diệu - phường Thảo Điền - quận 2 - Hồ Chí Minh',
                'phone' => '0910 876 543',
                'status' => 'Thành công',
                'enable' => 1,
                'total' => 480000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 3,
            ],
            [
                 
                'name' => 'Đỗ Thị Hà',
                'date' => '2023/12/23',
                'address' => 'số 35 - đường Lê Duẩn - phường Bến Nghé - quận 1 - Hồ Chí Minh',
                'phone' => '0978 123 789',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 370000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Lê Minh Châu',
                'date' => '2023/12/25',
                'address' => 'số 40 - đường Phạm Ngũ Lão - phường Phạm Ngũ Lão - quận 1 - Hồ Chí Minh',
                'phone' => '0908 765 432',
                'status' => 'Đang giao hàng',
                'enable' => 1,
                'total' => 430000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                 
                'name' => 'Nguyễn Thị Mai',
                'date' => '2023/12/27',
                'address' => 'số 55 - đường Trần Quang Khải - phường Tân Định - quận 1 - Hồ Chí Minh',
                'phone' => '0911 234 567',
                'status' => 'Thành công',
                'enable' => 1,
                'total' => 460000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Trần Văn Tú',
                'date' => '2023/12/29',
                'address' => 'số 60 - đường Lý Tự Trọng - phường Bến Thành - quận 1 - Hồ Chí Minh',
                'phone' => '0982 345 678',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 350000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Phạm Thị Hoa',
                'date' => '2024/01/02',
                'address' => 'số 65 - đường Đề Thám - phường Phạm Ngũ Lão - quận 1 - Hồ Chí Minh',
                'phone' => '0909 876 543',
                'status' => 'Đang giao hàng',
                'enable' => 1,
                'total' => 410000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Nguyễn Văn An',
                'date' => '2024/01/05',
                'address' => 'số 70 - đường Nguyễn Công Trứ - phường Nguyễn Thái Bình - quận 1 - Hồ Chí Minh',
                'phone' => '0979 123 456',
                'status' => 'Thành công',
                'enable' => 1,
                'total' => 440000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Lê Thị Anh',
                'date' => '2024/01/08',
                'address' => 'số 75 - đường Nam Kỳ Khởi Nghĩa - phường Bến Nghé - quận 1 - Hồ Chí Minh',
                'phone' => '0910 987 654',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 390000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
              
                'name' => 'Vũ Minh Tuấn',
                'date' => '2024/01/11',
                'address' => 'số 80 - đường Trần Hưng Đạo - phường Phạm Ngũ Lão - quận 1 - Hồ Chí Minh',
                'phone' => '0980 765 432',
                'status' => 'Đang giao hàng',
                'enable' => 1,
                'total' => 420000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
              
                'name' => 'Trương Văn Nam',
                'date' => '2024/01/14',
                'address' => 'số 85 - đường Hai Bà Trưng - phường Bến Nghé - quận 1 - Hồ Chí Minh',
                'phone' => '0912 345 678',
                'status' => 'Thành công',
                'enable' => 1,
                'total' => 450000,
                'payment_method' => 'MOMO',
                'payment_status'=> '',
                'user_id' => 4,
            ],
            [
                
                'name' => 'Đặng Thị Thảo',
                'date' => '2024/01/17',
                'address' => 'số 90 - đường Lê Lai - phường Bến Thành - quận 1 - Hồ Chí Minh',
                'phone' => '0909 876 543',
                'status' => 'Đang chuẩn bị',
                'enable' => 1,
                'total' => 400000,
                'payment_method' => 'COD',
                'payment_status'=> '',
                'user_id' => 4,
            ],
        ]);
    }
}
